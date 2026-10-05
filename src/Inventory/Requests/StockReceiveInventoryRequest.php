<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class StockReceiveInventoryRequest extends JsonSerializableType
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
     * @var ?DateTime $expiryDate
     */
    #[JsonProperty('expiryDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $expiryDate;

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
     *   unitCost: string,
     *   lotNumber?: ?string,
     *   expiryDate?: ?DateTime,
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
