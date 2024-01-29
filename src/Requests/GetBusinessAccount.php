<?php

namespace OscarTeam\ElenaPhp\Requests;

use OscarTeam\ElenaPhp\Response\DataObjects\BusinessAccountSuccessResponse;
use Saloon\Enums\Method;

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