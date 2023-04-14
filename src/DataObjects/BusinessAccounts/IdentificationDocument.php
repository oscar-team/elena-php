<?php

namespace OscarTeam\ElenaPhp\DataObjects\BusinessAccounts;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class IdentificationDocument extends DataTransferObject
{
    public readonly ?string $type;
    public readonly ?string $number;
}