<?php

namespace OscarTeam\ElenaPhp\DataObjects\BusinessAccounts;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Director extends DataTransferObject
{
    public readonly ?string $initials;
    public readonly ?string $lastNamePrefix;
    public readonly ?string $lastName;
    public readonly ?string $gender;
    public readonly ?string $dateOfBirth;
    public readonly ?string $function;
    public readonly ?IdentificationDocument $identificationDocument;
}