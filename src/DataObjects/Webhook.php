<?php

namespace OscarTeam\ElenaPhp\DataObjects;

class Webhook extends DataTransferObject
{
    public readonly ?string $purpose;
    public readonly ?string $url;
}