<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class WriteOffActsReportsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $movementId
     */
    #[JsonProperty('movementId')]
    public string $movementId;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $documentType
     */
    #[JsonProperty('documentType')]
    public string $documentType;

    /**
     * @var string $itemName
     */
    #[JsonProperty('itemName')]
    public string $itemName;

    /**
     * @var string $warehouseCode
     */
    #[JsonProperty('warehouseCode')]
    public string $warehouseCode;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $totalCost
     */
    #[JsonProperty('totalCost')]
    public string $totalCost;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   movementId: string,
     *   date: DateTime,
     *   documentType: string,
     *   itemName: string,
     *   warehouseCode: string,
     *   quantity: string,
     *   totalCost: string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->movementId = $values['movementId'];
        $this->date = $values['date'];
        $this->documentType = $values['documentType'];
        $this->itemName = $values['itemName'];
        $this->warehouseCode = $values['warehouseCode'];
        $this->quantity = $values['quantity'];
        $this->totalCost = $values['totalCost'];
        $this->notes = $values['notes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
