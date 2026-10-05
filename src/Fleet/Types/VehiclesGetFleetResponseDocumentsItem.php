<?php

namespace Nordlet\Fleet\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VehiclesGetFleetResponseDocumentsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $ref
     */
    #[JsonProperty('ref')]
    public string $ref;

    /**
     * @param array{
     *   name: string,
     *   ref: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->ref = $values['ref'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
