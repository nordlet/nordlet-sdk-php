<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReorderRulesCreateInventoryRequest extends JsonSerializableType
{
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
     * @var ?bool $isActive
     */
    #[JsonProperty('isActive')]
    public ?bool $isActive;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   itemId: string,
     *   minQty: string,
     *   warehouseId?: ?string,
     *   reorderQty?: ?string,
     *   isActive?: ?bool,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->minQty = $values['minQty'];
        $this->reorderQty = $values['reorderQty'] ?? null;
        $this->isActive = $values['isActive'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
