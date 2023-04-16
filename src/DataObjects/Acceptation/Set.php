<?php

namespace OscarTeam\ElenaPhp\DataObjects\Acceptation;

class Set
{
    public readonly string $setId;
    public readonly SetSettings $setSettings;
    public readonly string $displayName;
    public readonly ?array $documentTypesSupported;
    /** @var SetTest[] */
    public readonly ?array $tests;
}