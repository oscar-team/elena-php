<?php

namespace OscarTeam\ElenaPhp\DataObjects\Registration;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;
use OscarTeam\ElenaPhp\DataObjects\Document\Document;

class Lessee extends DataTransferObject
{
    public readonly ?string $id;
    public readonly ?string $gender;
    public readonly ?string $initials;
    public readonly ?string $nationality;
    public readonly ?string $firstName;
    public readonly ?string $socialSecurityNumber;
    public readonly ?string $lastName;
    public readonly ?string $lastNamePrefix;
    public readonly ?string $dateOfBirth;
    public readonly ?string $placeOfBirth;
    public readonly ?string $emailAddress;
    public readonly ?string $phoneNumber;
    public readonly ?string $mobilePhoneNumber;
    public readonly ?string $streetName;
    public readonly ?string $houseNumber;
    public readonly ?string $houseNumberExtension;
    public readonly ?string $postalCode;
    public readonly ?string $city;
    public readonly ?string $country;
    public readonly ?string $password;
    public readonly ?string $iban;
    public readonly ?string $bankAccountHolder;
    /** @var IdDocument[] */
    public readonly array $idDocuments;
    /** @var Document[] */
    public readonly array $documents;
}