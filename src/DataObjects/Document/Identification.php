<?php

namespace OscarTeam\ElenaPhp\DataObjects\Document;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Identification extends DataTransferObject
{
    public readonly Side $front;
    public readonly Side $back;
}