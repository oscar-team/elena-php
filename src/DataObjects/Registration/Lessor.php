<?php

namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Lessor extends DataTransferObject
{
    public readonly ?int $id;
    public readonly ?string $name;
}