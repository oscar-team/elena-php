<?php

namespace OscarTeam\ElenaPhp\Requests;

use OscarTeam\ElenaPhp\Response\DataObjects\AcceptationResponse;
use Saloon\Enums\Method;

class GetAcceptation extends CustomRequest
{
    protected Method $method = Method::GET;
    protected string $responseDTO = AcceptationResponse::class;

    public function resolveEndpoint(): string
    {
        return '/acceptation';
    }
}