<?php

namespace OscarTeam\ElenaPhp\Requests;

use CuyZ\Valinor\Mapper\Configurator\MapKeysToCamelCase;
use CuyZ\Valinor\Mapper\Source\Source;
use CuyZ\Valinor\MapperBuilder;
use OscarTeam\ElenaPhp\Response\DataObjects\ErrorResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\ValidationErrorResponse;
use Saloon\Http\Response;
use Saloon\Http\Request;

abstract class CustomRequest extends Request
{
    protected string $responseDTO;

    public function createDtoFromResponse(Response $response): mixed
    {
        $json = $response->json();

        $mapper = (new MapperBuilder())
            ->configureWith(new MapKeysToCamelCase())
            ->allowScalarValueCasting()
            ->allowNonSequentialList()
            ->allowUndefinedValues()
            ->allowPermissiveTypes()
            ->mapper();

        if ($response->failed()) {
            return $mapper->map(ErrorResponse::class, Source::array($json));
        }

        if (array_key_exists('errors', $json)) {
            return $mapper->map(ValidationErrorResponse::class, Source::array($json));
        }

        return $mapper->map($this->getResponseDTO(), Source::array($json));
    }

    public function getResponseDTO(): string
    {
        return $this->responseDTO;
    }
}
