<?php
namespace OscarTeam\ElenaPhp\DataObjects;

use OscarTeam\ElenaPhp\Enums\CommentType;

class Comment extends DataTransferObject
{
    public readonly ?CommentType $type;
    public readonly ?string $date;
    public readonly ?string $comment;
}