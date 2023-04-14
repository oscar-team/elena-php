<?php

namespace OscarTeam\ElenaPhp\Response\DataObjects;

use OscarTeam\ElenaPhp\DataObjects\BusinessAccounts\BusinessAccount;
use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class BusinessAccountSuccessResponse extends DataTransferObject
{
    public readonly BusinessAccount $registration;
}