<?php

namespace Nordlet\Transport\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1TransportWaybillsUpdateRequestLinesItem extends JsonSerializableType
{
    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var ?string $productCode
     */
    #[JsonProperty('productCode')]
    public ?string $productCode;

    /**
     * @param array{
     *   quantity: string,
     *   itemId?: ?string,
     *   description?: ?string,
     *   unit?: ?string,
     *   productCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->quantity = $values['quantity'];
        $this->productCode = $values['productCode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
