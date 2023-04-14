<?php

namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;
use OscarTeam\ElenaPhp\Enums\IdDocumentType;

class IdDocument extends DataTransferObject
{
    public readonly ?IdDocumentType $type;
    public readonly ?string $expireDate;
    public readonly ?string $number;
    public readonly ?string $country;
}