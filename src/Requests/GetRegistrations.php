<?php

namespace OscarTeam\ElenaPhp\Requests;

use OscarTeam\ElenaPhp\Response\DataObjects\RegistrationsSuccessResponse;
use Saloon\Enums\Method;

class GetRegistrations extends CustomRequest
{
    protected Method $method = Method::GET;
    protected string $responseDTO = RegistrationsSuccessResponse::class;

    public function resolveEndpoint(): string
    {
        return '/registrations';
    }
}
