<?php

namespace OscarTeam\ElenaPhp\DataObjects\Document;

use OscarTeam\ElenaPhp\DataObjects\CheckExecution;
use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;
use OscarTeam\ElenaPhp\Enums\DocumentType;

class Document extends DataTransferObject
{
    public readonly ?string $id;
    public readonly ?string $status;
    public readonly ?string $source;
    public readonly ?string $result;
    public readonly ?string $createdAt;
    public readonly ?string $prDocumentType;
    public readonly bool $finished;
    public readonly ?DocumentType $type;
    public readonly ?string $number;
    public readonly ?string $country;
    public readonly ?string $nationality;
    public readonly ?string $expirationDate;
    public readonly ?string $gender;
    public readonly ?string $firstName;
    public readonly ?string $lastName;
    public readonly ?string $fullName;
    public readonly ?string $dateOfBirth;
    public readonly ?string $placeOfBirth;
    public readonly ?string $socialSecurityNumber;
    public readonly ?string $issuingAuthority;
    public readonly ?string $issueDate;
    public readonly ?string $issueState;
    public readonly ?int $remainderTerm;
    public readonly ?int $checkdigitNumber;
    public readonly ?int $checkdigitDateOfBirth;
    public readonly ?int $checkdigitExpireDate;
    public readonly ?int $checkdigitFinal;
    public readonly ?string $mrzString;
    public readonly ?string $mrzStringCorrect;
    public readonly ?string $height;
    public readonly ?int $age;
    public readonly Fields $fields;
    public readonly Fields $mrzFields;
    public readonly Fields $ocrFields;
    public readonly Fields $rfidFields;
    /** @var Image[] */
    public readonly array $images;
    /** @var CheckExecution[] */
    public readonly array $checkExecutions;
    public readonly Identification $identification;
}