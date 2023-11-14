<?php

namespace OscarTeam\ElenaPhp\DataObjects\CompanySearch;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Address extends DataTransferObject
{
    public readonly ?string $street;
    public readonly ?string $houseNumber;
    public readonly ?string $zipCode;
    public readonly ?string $city;
    public readonly ?string $country;
    public readonly ?string $houseNumberExtension;
    public readonly ?string $addressLine1;
    public readonly ?string $addressLine2;
}