<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1InventoryReorderRulesListResponseRowsItem extends JsonSerializableType
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
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var string $minQty
     */
    #[JsonProperty('minQty')]
    public string $minQty;

    /**
     * @var ?string $reorderQty
     */
    #[JsonProperty('reorderQty')]
    public ?string $reorderQty;

    /**
     * @var bool $isActive
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   itemId: string,
     *   minQty: string,
     *   isActive: bool,
     *   createdAt: string,
     *   updatedAt: string,
     *   warehouseId?: ?string,
     *   reorderQty?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->itemId = $values['itemId'];
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->minQty = $values['minQty'];
        $this->reorderQty = $values['reorderQty'] ?? null;
        $this->isActive = $values['isActive'];
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
