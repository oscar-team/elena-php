<?php

namespace OscarTeam\ElenaPhp\Response\DataObjects;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class ErrorResponse extends DataTransferObject
{
    public readonly int $status;
    public readonly string $message;
    public readonly ?string $data;
}