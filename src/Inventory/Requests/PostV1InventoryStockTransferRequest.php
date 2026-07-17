<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1InventoryStockTransferRequest extends JsonSerializableType
{
    /**
     * @var string $fromWarehouseId
     */
    #[JsonProperty('fromWarehouseId')]
    public string $fromWarehouseId;

    /**
     * @var string $toWarehouseId
     */
    #[JsonProperty('toWarehouseId')]
    public string $toWarehouseId;

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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   fromWarehouseId: string,
     *   toWarehouseId: string,
     *   itemId: string,
     *   date: string,
     *   quantity: string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromWarehouseId = $values['fromWarehouseId'];
        $this->toWarehouseId = $values['toWarehouseId'];
        $this->itemId = $values['itemId'];
        $this->date = $values['date'];
        $this->quantity = $values['quantity'];
        $this->notes = $values['notes'] ?? null;
    }
}
