<?php

namespace OscarTeam\ElenaPhp\DataObjects\Document;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Image extends DataTransferObject
{
    public readonly ?string $id;
    public readonly ?string $side;
    public readonly ?string $lightType;
    /** @var FieldCoordinate[] */
    public readonly ?array $fieldCoordinates;
    public readonly ?string $dtype;
    public readonly bool $applyWatermark;
    public readonly ?string $url;
    public readonly ?string $size;
    public readonly ?string $originalFilename;
    public readonly bool $manipulated;
    public readonly ?string $createdAt;
    public readonly ?string $updatedAt;
}