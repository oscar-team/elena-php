<?php

namespace OscarTeam\ElenaPhp\Requests;

use OscarTeam\ElenaPhp\Response\DataObjects\RegistrationSuccessResponse;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class CreateRegistration extends CustomRequest implements HasBody
{
    use HasJsonBody;

    protected string $responseDTO = RegistrationSuccessResponse::class;

    protected Method $method = Method::POST;

    public function __construct(protected array $requestData)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/registrations';
    }

    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}