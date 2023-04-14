<?php

namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\Appointment;
use OscarTeam\ElenaPhp\DataObjects\CheckExecution;
use OscarTeam\ElenaPhp\DataObjects\Comment;
use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;
use OscarTeam\ElenaPhp\DataObjects\Webhook;

class Registration extends DataTransferObject
{
    public readonly string $id;
    public readonly ?string $externalId;
    public readonly ?string $inviteToken;
    public readonly ?string $keysafeIdentifier;
    public readonly ?string $deviceId;
    public readonly ?string $status;
    public readonly int $balance;
    public readonly int $minimumBalance;
    public readonly bool $paidRegistrationFee;
    public readonly string $checkProcess;
    /** @var Validations[] */
    public readonly array $validations;
    public readonly Lessor $lessor;
    public readonly Lessee $lessee;
    /** @var CheckExecution[] */
    public readonly array $checkExecutions;
    /** @var Appointment[] */
    public readonly ?array $appointments;
    /** @var Transaction[] */
    public readonly ?array $financialTransactions;
    /** @var Card[] */
    public readonly ?array $cards;
    /** @var Comment[] */
    public readonly ?array $comments;
    /** @var BusinessAccount[] */
    public readonly ?array $businessAccounts;
    public readonly Lock $lock;
    /** @var Webhook[] */
    public readonly ?array $webhooks;
    public readonly ?string $createdBy;
    public readonly ?string $createdAt;
    public readonly ?string $updatedAt;
    public readonly ?string $token;
    public readonly ?string $createdByEmail;
    public readonly ?string $createdByFirstName;
    public readonly ?string $createdByLastNamePrefix;
    public readonly ?string $createdByLastName;
}