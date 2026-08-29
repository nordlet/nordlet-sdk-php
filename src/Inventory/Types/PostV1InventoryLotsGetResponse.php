<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1InventoryLotsGetResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

    /**
     * @var string $lotNumber
     */
    #[JsonProperty('lotNumber')]
    public string $lotNumber;

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
     * @var string $onHand
     */
    #[JsonProperty('onHand')]
    public string $onHand;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var array<PostV1InventoryLotsGetResponseMovementsItem> $movements
     */
    #[JsonProperty('movements'), ArrayType([PostV1InventoryLotsGetResponseMovementsItem::class])]
    public array $movements;

    /**
     * @param array{
     *   id: string,
     *   itemId: string,
     *   lotNumber: string,
     *   onHand: string,
     *   createdAt: string,
     *   movements: array<PostV1InventoryLotsGetResponseMovementsItem>,
     *   expiryDate?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->itemId = $values['itemId'];
        $this->lotNumber = $values['lotNumber'];
        $this->expiryDate = $values['expiryDate'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->onHand = $values['onHand'];
        $this->createdAt = $values['createdAt'];
        $this->movements = $values['movements'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
