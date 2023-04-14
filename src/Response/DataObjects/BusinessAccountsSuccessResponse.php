<?php

namespace OscarTeam\ElenaPhp\Response\DataObjects;

use OscarTeam\ElenaPhp\DataObjects\BusinessAccounts\BusinessAccount;
use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class BusinessAccountsSuccessResponse extends DataTransferObject
{
    /** @var BusinessAccount[] */
    public readonly array $businessAccounts;
}