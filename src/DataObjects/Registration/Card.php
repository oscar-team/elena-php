<?php

namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Card extends DataTransferObject
{
    public readonly ?string $id;
    public readonly ?string $active;
    public readonly ?string $serialNumber;
}