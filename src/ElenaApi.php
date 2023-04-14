<?php

namespace OscarTeam\ElenaPhp;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

class ElenaApi extends Connector
{
    protected string $environment = 'prod';

    public function __construct(?string $environment = null)
    {
        $this->environment = $environment ?? $this->environment;
    }

    public function resolveBaseUrl(): string
    {
        return $this->getBaseUrl();
    }

    private function getBaseUrl(): string
    {
        if ($this->environment === 'prod') {
            return 'https://api.elena.nl/24';
        }
        return 'https://api.test.elena.nl/24';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }
}