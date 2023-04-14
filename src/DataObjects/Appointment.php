<?php

namespace OscarTeam\ElenaPhp\DataObjects;

class Appointment extends DataTransferObject
{
    public readonly ?string $appointmentId;
    public readonly ?string $registrationId;
    public readonly ?string $status;
    public readonly ?string $type;
    public readonly ?string $keysafeId;
    public readonly ?string $locationId;
    public readonly ?string $locationName;
    public readonly ?string $externalId;
    public readonly ?string $startDate;
    public readonly ?string $endDate;
}