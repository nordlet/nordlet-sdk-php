<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class IeB1GenerateDeclarationsResponseDirectorsItem extends JsonSerializableType
{
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
     * @var ?string $appointedOn
     */
    #[JsonProperty('appointedOn')]
    public ?string $appointedOn;

    /**
     * @param array{
     *   name: string,
     *   identifier?: ?string,
     *   appointedOn?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->identifier = $values['identifier'] ?? null;
        $this->appointedOn = $values['appointedOn'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
