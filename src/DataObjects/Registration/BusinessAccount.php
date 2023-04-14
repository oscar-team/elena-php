<?php
namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class BusinessAccount extends DataTransferObject
{
    public readonly ?string $id;
    public readonly ?string $userId;
    public readonly ?string $status;
    public readonly ?string $role;
    public readonly ?string $companyName;
}