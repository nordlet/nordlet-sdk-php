<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountProfileUpdateRequest extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
    }
}
