<?php

namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class TransactionStatus extends DataTransferObject
{
    public readonly ?string $status;
    public readonly ?string $timestamp;
}