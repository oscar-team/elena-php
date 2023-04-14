<?php

namespace OscarTeam\ElenaPhp\Response\DataObjects;

use OscarTeam\ElenaPhp\DataObjects\Comment;
use OscarTeam\ElenaPhp\DataObjects\DataTransferObject;

class CommentsSuccessResponse extends DataTransferObject
{
    /** @var Comment[] */
    public readonly array $comments;
}