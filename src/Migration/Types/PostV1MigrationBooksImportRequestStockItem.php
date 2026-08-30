<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1MigrationBooksImportRequestStockItem extends JsonSerializableType
{
    /**
     * @var ?string $warehouseCode
     */
    #[JsonProperty('warehouseCode')]
    public ?string $warehouseCode;

    /**
     * @var string $itemCode
     */
    #[JsonProperty('itemCode')]
    public string $itemCode;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $unitCost
     */
    #[JsonProperty('unitCost')]
    public string $unitCost;

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
     *   itemCode: string,
     *   quantity: string,
     *   unitCost: string,
     *   warehouseCode?: ?string,
     *   lotNumber?: ?string,
     *   expiryDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->warehouseCode = $values['warehouseCode'] ?? null;
        $this->itemCode = $values['itemCode'];
        $this->quantity = $values['quantity'];
        $this->unitCost = $values['unitCost'];
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
