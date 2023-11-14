<?php

namespace OscarTeam\ElenaPhp\Response\DataObjects;

use OscarTeam\ElenaPhp\DataObjects\CompanySearch;
use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class CompanySearchResponse extends DataTransferObject
{
    /** @var CompanySearch[] */
    public readonly array $companies;
    public readonly string $usedRequestType;
}