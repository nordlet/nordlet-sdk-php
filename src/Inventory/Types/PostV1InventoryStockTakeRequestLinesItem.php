<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1InventoryStockTakeRequestLinesItem extends JsonSerializableType
{
    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var ?string $barcode
     */
    #[JsonProperty('barcode')]
    public ?string $barcode;

    /**
     * @var string $countedQty
     */
    #[JsonProperty('countedQty')]
    public string $countedQty;

    /**
     * @var ?string $unitCost
     */
    #[JsonProperty('unitCost')]
    public ?string $unitCost;

    /**
     * @var ?string $lotNumber
     */
    #[JsonProperty('lotNumber')]
    public ?string $lotNumber;

    /**
     * @var ?string $expiryDate
     */
    #[JsonProperty('expiryDate')]
    public ?string $expiryDate;

    /**
     * @param array{
     *   countedQty: string,
     *   itemId?: ?string,
     *   barcode?: ?string,
     *   unitCost?: ?string,
     *   lotNumber?: ?string,
     *   expiryDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->barcode = $values['barcode'] ?? null;
        $this->countedQty = $values['countedQty'];
        $this->unitCost = $values['unitCost'] ?? null;
        $this->lotNumber = $values['lotNumber'] ?? null;
        $this->expiryDate = $values['expiryDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
