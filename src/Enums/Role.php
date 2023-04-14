<?php

namespace OscarTeam\ElenaPhp\Enums;

enum Role: string
{
    case USER = 'user';
    case ADMIN = 'admin';
    case UNKNOWN = 'unknown';
}