<?php

namespace OscarTeam\ElenaPhp\Enums;

enum DocumentType: string
{
    case D = 'D';
    case I = 'I';
    case P = 'P';
    case S = 'S';
    case C = 'C';
    case PASSPORT = 'passport';
    case ID_CARD = 'id_card';
    case NATIONAL_ID = 'national_id';
    case RESIDENCE_PERMIT = 'residence_permit';
    case DRIVERS_LICENSE = 'drivers_license';
    case DRIVING_LICENSE = 'driving_license';
    case SIGNATURE = 'signature';
    case CAMERA = 'camera';
    case UNKNOWN = 'unknown';
}