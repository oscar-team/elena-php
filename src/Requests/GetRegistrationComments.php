<?php

namespace OscarTeam\ElenaPhp\Requests;

use OscarTeam\ElenaPhp\Response\DataObjects\CommentsSuccessResponse;
use Saloon\Enums\Method;

class GetRegistrationComments extends CustomRequest
{
    protected Method $method = Method::GET;
    protected string $responseDTO = CommentsSuccessResponse::class;

    public function __construct(protected string $id)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/registrations/' . $this->id . '/comments';
    }
}