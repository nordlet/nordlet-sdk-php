<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsMtAnnualReturnGenerateResponseOfficersItem extends JsonSerializableType
{
    /**
     * @var string $position
     */
    #[JsonProperty('position')]
    public string $position;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $identifier
     */
    #[JsonProperty('identifier')]
    public ?string $identifier;

    /**
     * @param array{
     *   position: string,
     *   name: string,
     *   identifier?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->position = $values['position'];
        $this->name = $values['name'];
        $this->identifier = $values['identifier'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
