<?php

namespace OscarTeam\ElenaPhp\DataObjects\Document;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Side extends DataTransferObject
{
    public readonly ?string $country;
    public readonly ?string $documentName;
    public readonly ?string $countryName;
    public readonly ?int $year;
    public readonly ?string $type;
}