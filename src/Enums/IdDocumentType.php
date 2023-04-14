<?php

namespace OscarTeam\ElenaPhp\Enums;

enum IdDocumentType: string
{
    case DRIVERS_LICENSE = 'drivers_license';
    case ID_CARD = 'id_card';
    case PASSPORT = 'passport';
}