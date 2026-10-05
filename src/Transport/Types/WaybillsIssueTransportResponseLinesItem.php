<?php

namespace Nordlet\Transport\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class WaybillsIssueTransportResponseLinesItem extends JsonSerializableType
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
     * @var ?string $productCode
     */
    #[JsonProperty('productCode')]
    public ?string $productCode;

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
     *   productCode?: ?string,
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
        $this->productCode = $values['productCode'] ?? null;
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
