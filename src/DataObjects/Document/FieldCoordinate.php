<?php

namespace OscarTeam\ElenaPhp\DataObjects\Document;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class FieldCoordinate extends DataTransferObject
{
    public readonly ?string $fieldType;
    public readonly ?string $rectangle;
}