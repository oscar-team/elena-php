<?php

namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Attachment extends DataTransferObject
{
    public readonly ?string $filename;
    public readonly ?string $_;
    public readonly ?string $id;
    public readonly ?string $originalFilename;
    public readonly ?string $url;
}