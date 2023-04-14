<?php

namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class Transaction extends DataTransferObject
{
    public readonly ?string $id;
    public readonly ?string $status;
    public readonly ?int $amount;
    public readonly ?string $description;
    public readonly ?string $paymentMethod;
    /** @var TransactionStatus[] */
    public readonly ?array $statusHistory;
    /** @var Attachment[] */
    public readonly ?array $attachments;
}