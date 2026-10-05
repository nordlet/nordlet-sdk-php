<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class BomsCreateProductionRequestLinesItem extends JsonSerializableType
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
     * @var ?string $scrapPercent
     */
    #[JsonProperty('scrapPercent')]
    public ?string $scrapPercent;

    /**
     * @param array{
     *   componentItemId: string,
     *   quantity: string,
     *   scrapPercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->componentItemId = $values['componentItemId'];
        $this->quantity = $values['quantity'];
        $this->scrapPercent = $values['scrapPercent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
