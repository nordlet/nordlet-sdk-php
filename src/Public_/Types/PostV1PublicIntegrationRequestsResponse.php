<?php

namespace Nordlet\Public_\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PublicIntegrationRequestsResponse extends JsonSerializableType
{
    /**
     * @var bool $received
     */
    #[JsonProperty('received')]
    public bool $received;

    /**
     * @param array{
     *   received: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->received = $values['received'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
