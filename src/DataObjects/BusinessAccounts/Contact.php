<?php

namespace OscarTeam\ElenaPhp\DataObjects\BusinessAccounts;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Contact extends DataTransferObject
{
    public readonly ?string $firstName;
    public readonly ?string $lastName;
    public readonly ?string $gender;
    public readonly ?string $phoneNumber;
    public readonly ?string $mobilePhoneNumber;
    public readonly ?string $emailAddress;
    public readonly ?string $faxNumber;
}