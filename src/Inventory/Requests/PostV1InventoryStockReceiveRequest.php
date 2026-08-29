<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1InventoryStockReceiveRequest extends JsonSerializableType
{
    /**
     * @var string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public string $warehouseId;

    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   warehouseId: string,
     *   itemId: string,
     *   date: string,
     *   quantity: string,
     *   unitCost: string,
     *   lotNumber?: ?string,
     *   expiryDate?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->warehouseId = $values['warehouseId'];
        $this->itemId = $values['itemId'];
        $this->date = $values['date'];
        $this->quantity = $values['quantity'];
        $this->unitCost = $values['unitCost'];
        $this->lotNumber = $values['lotNumber'] ?? null;
        $this->expiryDate = $values['expiryDate'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
