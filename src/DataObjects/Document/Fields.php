<?php

namespace OscarTeam\ElenaPhp\DataObjects\Document;

use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;
use OscarTeam\ElenaPhp\Enums\DocumentType;

class Fields extends DataTransferObject
{
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
    public readonly ?string $driversLicenseAmFrom;
    public readonly ?string $driversLicenseAmTo;
    public readonly ?string $driversLicenseA1From;
    public readonly ?string $driversLicenseA1To;
    public readonly ?string $driversLicenseA2From;
    public readonly ?string $driversLicenseA2To;
    public readonly ?string $driversLicenseAFrom;
    public readonly ?string $driversLicenseATo;
    public readonly ?string $driversLicenseB1From;
    public readonly ?string $driversLicenseB1To;
    public readonly ?string $driversLicenseBFrom;
    public readonly ?string $driversLicenseBTo;
    public readonly ?string $driversLicenseC1From;
    public readonly ?string $driversLicenseC1To;
    public readonly ?string $driversLicenseCFrom;
    public readonly ?string $driversLicenseCTo;
    public readonly ?string $driversLicenseD1From;
    public readonly ?string $driversLicenseD1To;
    public readonly ?string $driversLicenseDFrom;
    public readonly ?string $driversLicenseDTo;
    public readonly ?string $driversLicenseBeFrom;
    public readonly ?string $driversLicenseBeTo;
    public readonly ?string $driversLicenseC1eFrom;
    public readonly ?string $driversLicenseC1eTo;
    public readonly ?string $driversLicenseCeFrom;
    public readonly ?string $driversLicenseCeTo;
    public readonly ?string $driversLicenseD1eFrom;
    public readonly ?string $driversLicenseD1eTo;
    public readonly ?string $driversLicenseDeFrom;
    public readonly ?string $driversLicenseDeTo;
    public readonly ?string $driversLicenseMFrom;
    public readonly ?string $driversLicenseMTo;
    public readonly ?string $driversLicenseLFrom;
    public readonly ?string $driversLicenseLTo;
    public readonly ?string $driversLicenseTFrom;
    public readonly ?string $driversLicenseTTo;
}