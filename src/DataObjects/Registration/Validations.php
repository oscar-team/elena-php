<?php

namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Validations extends DataTransferObject
{
    public readonly string $type;
    public readonly string $status;
}