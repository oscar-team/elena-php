<?php

namespace OscarTeam\ElenaPhp\Response\DataObjects;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;
use OscarTeam\ElenaPhp\DataObjects\Registration\Registration;

class RegistrationSuccessResponse extends DataTransferObject
{
    public readonly Registration $registration;
}