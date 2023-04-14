<?php

namespace OscarTeam\ElenaPhp\Requests;

use OscarTeam\ElenaPhp\Response\DataObjects\RegistrationSuccessResponse;
use Saloon\Enums\Method;

class GetRegistration extends CustomRequest
{
    protected Method $method = Method::GET;
    protected string $responseDTO = RegistrationSuccessResponse::class;

    public function __construct(protected string $id)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/registrations/' . $this->id;
    }
}