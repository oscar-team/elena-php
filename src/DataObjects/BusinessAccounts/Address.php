<?php

namespace OscarTeam\ElenaPhp\DataObjects\BusinessAccounts;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Address extends DataTransferObject
{
    public readonly ?string $address;
    public readonly ?string $zipCode;
    public readonly ?string $city;
    public readonly ?string $country;
}