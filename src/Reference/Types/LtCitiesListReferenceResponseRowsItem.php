<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LtCitiesListReferenceResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $municipalityCode
     */
    #[JsonProperty('municipalityCode')]
    public string $municipalityCode;

    /**
     * @param array{
     *   name: string,
     *   municipalityCode: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->municipalityCode = $values['municipalityCode'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
