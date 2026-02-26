<?php

use OscarTeam\ElenaPhp\Requests\GetBusinessAccounts;
use OscarTeam\ElenaPhp\Requests\GetRegistrations;
use OscarTeam\ElenaPhp\Response\DataObjects\BusinessAccountsSuccessResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\RegistrationsSuccessResponse;
use Saloon\Enums\Method;

describe('GetRegistrations', function () {
    it('has GET method', function () {
        $request = new GetRegistrations();
        expect($request->getMethod())->toBe(Method::GET);
    });

    it('resolves endpoint to /registrations', function () {
        $request = new GetRegistrations();
        expect($request->resolveEndpoint())->toBe('/registrations');
    });

    it('uses RegistrationsSuccessResponse as response DTO', function () {
        $request = new GetRegistrations();
        expect($request->getResponseDTO())->toBe(RegistrationsSuccessResponse::class);
    });
});

describe('GetBusinessAccounts', function () {
    it('has GET method', function () {
        $request = new GetBusinessAccounts();
        expect($request->getMethod())->toBe(Method::GET);
    });

    it('resolves endpoint to /business-accounts', function () {
        $request = new GetBusinessAccounts();
        expect($request->resolveEndpoint())->toBe('/business-accounts');
    });

    it('uses BusinessAccountsSuccessResponse as response DTO', function () {
        $request = new GetBusinessAccounts();
        expect($request->getResponseDTO())->toBe(BusinessAccountsSuccessResponse::class);
    });
});
