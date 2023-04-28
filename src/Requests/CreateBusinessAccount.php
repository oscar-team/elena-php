<?php

namespace OscarTeam\ElenaPhp\Requests;

use OscarTeam\ElenaPhp\Response\DataObjects\BusinessAccountSuccessResponse;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class CreateBusinessAccount extends CustomRequest implements HasBody
{
    use HasJsonBody;

    protected string $responseDTO = BusinessAccountSuccessResponse::class;

    protected Method $method = Method::POST;

    public function __construct(protected array $requestData)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/business-accounts';
    }

    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}