<?php

namespace OscarTeam\ElenaPhp\DataObjects\BusinessAccounts;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;
use OscarTeam\ElenaPhp\Enums\Role;

class User extends DataTransferObject
{
    public readonly ?string $id;
    public readonly ?string $registrationId;
    public readonly ?string $status;
    public readonly ?Role $role;
    public readonly ?string $firstName;
    public readonly ?string $lastName;
    public readonly ?string $emailAddress;
    public readonly ?string $gender;
}