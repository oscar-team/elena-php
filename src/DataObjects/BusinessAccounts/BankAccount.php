<?php

namespace OscarTeam\ElenaPhp\DataObjects\BusinessAccounts;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class BankAccount extends DataTransferObject
{
    public readonly ?string $owner;
    public readonly ?string $number;
}