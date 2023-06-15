<?php

namespace OscarTeam\ElenaPhp\Requests;

use OscarTeam\ElenaPhp\Response\DataObjects\RegistrationSuccessResponse;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class UpdateRegistration extends CustomRequest implements HasBody
{
    use HasJsonBody;

    protected string $responseDTO = RegistrationSuccessResponse::class;

    protected Method $method = Method::PUT;

    public function __construct(protected string $id, protected array $requestData)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/registrations/' . $this->id;
    }

    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}
