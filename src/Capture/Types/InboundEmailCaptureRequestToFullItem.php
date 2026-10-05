<?php

namespace Nordlet\Capture\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InboundEmailCaptureRequestToFullItem extends JsonSerializableType
{
    /**
     * @var ?string $email
     */
    #[JsonProperty('Email')]
    public ?string $email;

    /**
     * @param array{
     *   email?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->email = $values['email'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
