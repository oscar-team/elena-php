<?php

namespace OscarTeam\ElenaPhp\Requests;

use OscarTeam\ElenaPhp\Response\DataObjects\CompanySearchResponse;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class CompanySearch extends CustomRequest implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected string $responseDTO = CompanySearchResponse::class;
    public function __construct(protected array $requestData)
    {
    }
    public function resolveEndpoint(): string
    {
        return '/company-search';
    }
    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}