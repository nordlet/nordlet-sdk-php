<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class StockWriteOffInventoryRequest extends JsonSerializableType
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
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var ?string $lotNumber
     */
    #[JsonProperty('lotNumber')]
    public ?string $lotNumber;

    /**
     * @var ?string $expenseAccountCode
     */
    #[JsonProperty('expenseAccountCode')]
    public ?string $expenseAccountCode;

    /**
     * @var ?string $inventoryAccountCode
     */
    #[JsonProperty('inventoryAccountCode')]
    public ?string $inventoryAccountCode;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   warehouseId: string,
     *   itemId: string,
     *   date: DateTime,
     *   quantity: string,
     *   lotNumber?: ?string,
     *   expenseAccountCode?: ?string,
     *   inventoryAccountCode?: ?string,
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
        $this->lotNumber = $values['lotNumber'] ?? null;
        $this->expenseAccountCode = $values['expenseAccountCode'] ?? null;
        $this->inventoryAccountCode = $values['inventoryAccountCode'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
