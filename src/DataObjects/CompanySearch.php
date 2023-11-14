<?php

namespace OscarTeam\ElenaPhp\DataObjects;

use OscarTeam\ElenaPhp\DataObjects\CompanySearch\Address;

class CompanySearch extends DataTransferObject
{
    public readonly ?string $status;
    public readonly ?string $name;
    public readonly ?Address $address;
    public readonly ?string $chamberOfCommerceNumber;
    public readonly ?string $searchIdentifier;
}