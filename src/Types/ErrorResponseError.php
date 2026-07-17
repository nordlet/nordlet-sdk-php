<?php

namespace Nordlet\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ErrorResponseError extends JsonSerializableType
{
    /**
     * @var value-of<ErrorResponseErrorCode> $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var string $requestId
     */
    #[JsonProperty('requestId')]
    public string $requestId;

    /**
     * @var ?array<string, array<string>> $fieldErrors
     */
    #[JsonProperty('fieldErrors'), ArrayType(['string' => ['string']])]
    public ?array $fieldErrors;

    /**
     * @param array{
     *   code: value-of<ErrorResponseErrorCode>,
     *   message: string,
     *   requestId: string,
     *   fieldErrors?: ?array<string, array<string>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->message = $values['message'];
        $this->requestId = $values['requestId'];
        $this->fieldErrors = $values['fieldErrors'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
