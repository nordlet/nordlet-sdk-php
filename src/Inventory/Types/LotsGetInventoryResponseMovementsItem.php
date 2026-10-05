<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class LotsGetInventoryResponseMovementsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var ?string $lotId
     */
    #[JsonProperty('lotId')]
    public ?string $lotId;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var value-of<LotsGetInventoryResponseMovementsItemDirection> $direction
     */
    #[JsonProperty('direction')]
    public string $direction;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var ?string $unitCost
     */
    #[JsonProperty('unitCost')]
    public ?string $unitCost;

    /**
     * @var string $totalCost
     */
    #[JsonProperty('totalCost')]
    public string $totalCost;

    /**
     * @var string $remainingQty
     */
    #[JsonProperty('remainingQty')]
    public string $remainingQty;

    /**
     * @var ?string $documentType
     */
    #[JsonProperty('documentType')]
    public ?string $documentType;

    /**
     * @var ?string $documentId
     */
    #[JsonProperty('documentId')]
    public ?string $documentId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   warehouseId: string,
     *   itemId: string,
     *   date: DateTime,
     *   direction: value-of<LotsGetInventoryResponseMovementsItemDirection>,
     *   quantity: string,
     *   totalCost: string,
     *   remainingQty: string,
     *   createdAt: DateTime,
     *   lotId?: ?string,
     *   unitCost?: ?string,
     *   documentType?: ?string,
     *   documentId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->warehouseId = $values['warehouseId'];
        $this->itemId = $values['itemId'];
        $this->lotId = $values['lotId'] ?? null;
        $this->date = $values['date'];
        $this->direction = $values['direction'];
        $this->quantity = $values['quantity'];
        $this->unitCost = $values['unitCost'] ?? null;
        $this->totalCost = $values['totalCost'];
        $this->remainingQty = $values['remainingQty'];
        $this->documentType = $values['documentType'] ?? null;
        $this->documentId = $values['documentId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
