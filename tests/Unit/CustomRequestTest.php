<?php

use OscarTeam\ElenaPhp\Requests\GetRegistrations;
use OscarTeam\ElenaPhp\Response\DataObjects\ErrorResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\RegistrationsSuccessResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\ValidationErrorResponse;
use Saloon\Http\Response;

beforeEach(function () {
    $this->request = new GetRegistrations();
});

describe('CustomRequest DTO mapping', function () {
    it('maps successful JSON to RegistrationSuccessResponse', function () {
        $registrationPayload = [
            'id' => 'reg-1',
            'external_id' => null,
            'invite_token' => null,
            'keysafe_identifier' => null,
            'device_id' => null,
            'status' => 'active',
            'balance' => 0,
            'minimum_balance' => 0,
            'paid_registration_fee' => true,
            'check_process' => 'standard',
            'validations' => [
                ['type' => 'id', 'status' => 'done'],
            ],
            'lessor' => ['id' => 1, 'name' => 'Lessor Co'],
            'lessee' => [
                'id' => null,
                'id_documents' => [],
                'documents' => [],
            ],
            'check_executions' => [],
            'appointments' => null,
            'financial_transactions' => null,
            'cards' => null,
            'comments' => null,
            'business_accounts' => null,
            'lock' => ['number' => null, 'keysafe_identifier' => null, 'keysafe_name' => null],
            'created_by' => null,
            'created_at' => null,
            'updated_at' => null,
            'token' => null,
            'created_by_email' => null,
            'created_by_first_name' => null,
            'created_by_last_name_prefix' => null,
            'created_by_last_name' => null,
        ];
        $json = ['registrations' => [$registrationPayload]];

        $response = $this->getMockBuilder(Response::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['json', 'failed'])
            ->getMock();
        $response->method('json')->willReturn($json);
        $response->method('failed')->willReturn(false);

        $dto = $this->request->createDtoFromResponse($response);

        expect($dto)->toBeInstanceOf(RegistrationsSuccessResponse::class);
        expect($dto->registrations)->toHaveCount(1);
        expect($dto->registrations[0]->id)->toBe('reg-1');
        expect($dto->registrations[0]->balance)->toBe(0);
        expect($dto->registrations[0]->checkProcess)->toBe('standard');
    });

    it('maps failed response to ErrorResponse', function () {
        $json = [
            'status' => 404,
            'message' => 'Not found',
            'data' => null,
        ];
        $response = $this->getMockBuilder(Response::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['json', 'failed'])
            ->getMock();
        $response->method('json')->willReturn($json);
        $response->method('failed')->willReturn(true);

        $dto = $this->request->createDtoFromResponse($response);

        expect($dto)->toBeInstanceOf(ErrorResponse::class);
        expect($dto->status)->toBe(404);
        expect($dto->message)->toBe('Not found');
    });

    it('maps validation error payload to ValidationErrorResponse', function () {
        $json = [
            'errors' => [
                ['code' => 'VALIDATION_ERROR', 'message' => 'Invalid field'],
            ],
        ];
        $response = $this->getMockBuilder(Response::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['json', 'failed'])
            ->getMock();
        $response->method('json')->willReturn($json);
        $response->method('failed')->willReturn(false);

        $dto = $this->request->createDtoFromResponse($response);

        expect($dto)->toBeInstanceOf(ValidationErrorResponse::class);
        expect($dto->errors)->toHaveCount(1);
        expect($dto->errors[0]->code)->toBe('VALIDATION_ERROR');
        expect($dto->errors[0]->message)->toBe('Invalid field');
    });
});
