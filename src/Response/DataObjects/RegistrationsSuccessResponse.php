<?php

namespace OscarTeam\ElenaPhp\Response\DataObjects;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;
use OscarTeam\ElenaPhp\DataObjects\Registration\Registration;

class RegistrationsSuccessResponse extends DataTransferObject
{
    /** @var Registration[] */
    public readonly array $registrations;
}