<?php

namespace OscarTeam\ElenaPhp\DataObjects\BusinessAccounts;

use OscarTeam\ElenaPhp\DataObjects\Appointment;
use OscarTeam\ElenaPhp\DataObjects\CheckExecution;
use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;
use OscarTeam\ElenaPhp\DataObjects\Webhook;

class BusinessAccount extends DataTransferObject
{
    public readonly ?string $id;
    public readonly ?string $externalId;
    public readonly ?string $status;
    public readonly ?string $checkProcess;
    public readonly ?Company $company;
    public readonly ?Contact $contractContact;
    public readonly ?Contact $administrativeContact;
    public readonly ?bool $sameContact;
    /** @var User[] */
    public readonly ?array $users;
    /** @var CheckExecution[] */
    public readonly ?array $checkExecutions;
    /** @var Appointment[] */
    public readonly ?array $appointments;
    /** @var Webhook[] */
    public readonly ?array $webhooks;
    public readonly ?string $createdAt;
    public readonly ?string $updatedAt;
}