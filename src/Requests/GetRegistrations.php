<?php

namespace OscarTeam\ElenaPhp\Requests;

use CuyZ\Valinor\Mapper\Source\Source;
use CuyZ\Valinor\MapperBuilder;
use OscarTeam\ElenaPhp\Response\DataObjects\ErrorResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\RegistrationsSuccessResponse;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRegistrations extends CustomRequest
{
    protected Method $method = Method::GET;
    protected string $responseDTO = RegistrationsSuccessResponse::class;

    public function resolveEndpoint(): string
    {
        return '/registrations';
    }
}