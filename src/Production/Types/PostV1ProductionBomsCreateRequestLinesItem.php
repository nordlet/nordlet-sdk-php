<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProductionBomsCreateRequestLinesItem extends JsonSerializableType
{
    /**
     * @var string $componentItemId
     */
    #[JsonProperty('componentItemId')]
    public string $componentItemId;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @param array{
     *   componentItemId: string,
     *   quantity: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->componentItemId = $values['componentItemId'];
        $this->quantity = $values['quantity'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
