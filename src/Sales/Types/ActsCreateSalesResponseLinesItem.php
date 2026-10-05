<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ActsCreateSalesResponseLinesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var ?string $unitPriceExclVat
     */
    #[JsonProperty('unitPriceExclVat')]
    public ?string $unitPriceExclVat;

    /**
     * @var ?string $lineNet
     */
    #[JsonProperty('lineNet')]
    public ?string $lineNet;

    /**
     * @var int $sortOrder
     */
    #[JsonProperty('sortOrder')]
    public int $sortOrder;

    /**
     * @param array{
     *   id: string,
     *   description: string,
     *   unit: string,
     *   quantity: string,
     *   sortOrder: int,
     *   itemId?: ?string,
     *   unitPriceExclVat?: ?string,
     *   lineNet?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->itemId = $values['itemId'] ?? null;
        $this->description = $values['description'];
        $this->unit = $values['unit'];
        $this->quantity = $values['quantity'];
        $this->unitPriceExclVat = $values['unitPriceExclVat'] ?? null;
        $this->lineNet = $values['lineNet'] ?? null;
        $this->sortOrder = $values['sortOrder'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
