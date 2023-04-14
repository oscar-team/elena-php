<?php

namespace OscarTeam\ElenaPhp\Enums;

enum CommentType: string
{
    case CUSTOMER_COMMENT = 'customer_comment';
    case ORGANISATION_COMMENT = 'organisation_comment';
    case SYSTEM = 'system';
    case UNKNOWN = 'unknown';
    case MANUAL = 'manual';
}