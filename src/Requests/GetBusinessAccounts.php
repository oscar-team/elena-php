<?php

namespace OscarTeam\ElenaPhp\Requests;

use CuyZ\Valinor\Mapper\Source\Source;
use CuyZ\Valinor\Mapper\Tree\Message\Messages;
use CuyZ\Valinor\MapperBuilder;
use OscarTeam\ElenaPhp\Response\DataObjects\BusinessAccountsSuccessResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\ErrorResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\RegistrationsSuccessResponse;
use Saloon\Http\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetBusinessAccounts extends CustomRequest
{
    protected Method $method = Method::GET;
    protected string $responseDTO = BusinessAccountsSuccessResponse::class;

    public function resolveEndpoint(): string
    {
        return '/business-accounts';
    }
}