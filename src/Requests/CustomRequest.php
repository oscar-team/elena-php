<?php

namespace OscarTeam\ElenaPhp\Requests;

use CuyZ\Valinor\Mapper\MappingError;
use CuyZ\Valinor\Mapper\Source\Source;
use CuyZ\Valinor\Mapper\Tree\Message\Messages;
use CuyZ\Valinor\MapperBuilder;
use OscarTeam\ElenaPhp\Response\DataObjects\ErrorResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\RegistrationSuccessResponse;
use OscarTeam\ElenaPhp\Response\DataObjects\ValidationErrorResponse;
use Saloon\Contracts\Response;
use Saloon\Http\Request;

abstract class CustomRequest extends Request
{
    protected string $responseDTO;

    public function createDtoFromResponse(Response $response): mixed
    {
        $source = Source::array($response->json())->camelCaseKeys();

        if ($response->failed()) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowPermissiveTypes()
                ->mapper()
                ->map(ErrorResponse::class, $source);
        }

        if (array_key_exists('errors', $response->json())) {
            if (isset($source['errors'])) {
                return (new MapperBuilder())
                    ->enableFlexibleCasting()
                    ->allowPermissiveTypes()
                    ->mapper()
                    ->map(ValidationErrorResponse::class, $source);
            }
        }

        try {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowPermissiveTypes()
                ->mapper()
                ->map($this->getResponseDTO(), $source);
        } catch (MappingError $error) {
            // Get flatten list of all messages through the whole nodes tree
            $messages = Messages::flattenFromNode(
                $error->node()
            );

            // Formatters can be added and will be applied on all messages
            /*$messages = $messages->formatWith(
                new \CuyZ\Valinor\Mapper\Tree\Message\Formatter\MessageMapFormatter([
                    // …
                ]),
                (new \CuyZ\Valinor\Mapper\Tree\Message\Formatter\TranslationMessageFormatter())
                    ->withTranslations([
                        // …
                    ])
            );*/

            // If only errors are wanted, they can be filtered
            $errorMessages = $messages->errors();

            foreach ($errorMessages as $message) {
                echo $message ;
            }
        }
    }

    public function getResponseDTO(): string
    {
        return $this->responseDTO;
    }
}