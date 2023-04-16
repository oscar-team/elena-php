<?php

namespace OscarTeam\ElenaPhp\Response\DataObjects;

use OscarTeam\ElenaPhp\DataObjects\Acceptation\ConfigurationDocuments;
use OscarTeam\ElenaPhp\DataObjects\Acceptation\Set;
use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class AcceptationResponse extends DataTransferObject
{
    public readonly ?ConfigurationDocuments $documentConfig;
    /** @var Set[]  */
    public readonly ?array $sets;
}