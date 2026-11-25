<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class MtFs7GenerateDeclarationsResponseBoxesItem extends JsonSerializableType
{
    /**
     * @var string $box
     */
    #[JsonProperty('box')]
    public string $box;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   box: string,
     *   description: string,
     *   value: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->box = $values['box'];
        $this->description = $values['description'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
