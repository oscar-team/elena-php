<?php

namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Lock extends DataTransferObject
{
    public readonly ?string $number;
    public readonly ?string $keysafeIdentifier;
    public readonly ?string $keysafeName;
}