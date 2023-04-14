<?php

namespace OscarTeam\ElenaPhp\DataObjects\BusinessAccounts;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Company extends DataTransferObject
{
    public readonly ?string $companyName;
    public readonly ?string $legalForm;
    public readonly ?BankAccount $bankAccount;
    public readonly ?Address $visitingAddress;
    public readonly ?Address $postalAddress;
    public readonly bool $sameAddress;
    public readonly ?string $industry;
    public readonly ?string $phoneNumber;
    public readonly ?string $faxNumber;
    public readonly ?string $yearEstablished;
    public readonly ?string $cocRegistrationNumber;
    public readonly ?string $vatNumber;
    public readonly ?string $emailAddress;
    public readonly ?string $financeEmailAddress;
    public readonly ?string $website;
    public readonly ?string $mainActivity;
    public readonly ?Director $director;
}