<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class StockTransferInventoryRequest extends JsonSerializableType
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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   fromWarehouseId: string,
     *   toWarehouseId: string,
     *   itemId: string,
     *   date: DateTime,
     *   quantity: string,
     *   lotNumber?: ?string,
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
        $this->lotNumber = $values['lotNumber'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
