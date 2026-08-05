<?php

namespace OscarTeam\ElenaPhp\Requests;

use OscarTeam\ElenaPhp\Response\DataObjects\BusinessAccountsSuccessResponse;
use Saloon\Enums\Method;

class GetBusinessAccounts extends CustomRequest
{
    protected Method $method = Method::GET;
    protected string $responseDTO = BusinessAccountsSuccessResponse::class;

    public function resolveEndpoint(): string
    {
        return '/business-accounts';
    }
}
