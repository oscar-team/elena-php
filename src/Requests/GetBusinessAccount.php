<?php

namespace OscarTeam\ElenaPhp\Requests;

use CuyZ\Valinor\Mapper\MappingError;
use CuyZ\Valinor\Mapper\Source\Source;
use CuyZ\Valinor\Mapper\Tree\Message\Messages;
use CuyZ\Valinor\MapperBuilder;
use OscarTeam\ElenaPhp\Response\DataObjects\BusinessAccountSuccessResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\ErrorResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\RegistrationSuccessResponse;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetBusinessAccount extends CustomRequest
{
    protected Method $method = Method::GET;
    protected string $responseDTO = BusinessAccountSuccessResponse::class;

    public function __construct(protected string $id)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/business-accounts/' . $this->id;
    }
}