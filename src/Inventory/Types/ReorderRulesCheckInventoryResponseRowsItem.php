<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReorderRulesCheckInventoryResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $ruleId
     */
    #[JsonProperty('ruleId')]
    public string $ruleId;

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
     * @var string $onHand
     */
    #[JsonProperty('onHand')]
    public string $onHand;

    /**
     * @var string $reserved
     */
    #[JsonProperty('reserved')]
    public string $reserved;

    /**
     * @var string $available
     */
    #[JsonProperty('available')]
    public string $available;

    /**
     * @param array{
     *   ruleId: string,
     *   itemId: string,
     *   minQty: string,
     *   onHand: string,
     *   reserved: string,
     *   available: string,
     *   warehouseId?: ?string,
     *   reorderQty?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ruleId = $values['ruleId'];
        $this->itemId = $values['itemId'];
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->minQty = $values['minQty'];
        $this->reorderQty = $values['reorderQty'] ?? null;
        $this->onHand = $values['onHand'];
        $this->reserved = $values['reserved'];
        $this->available = $values['available'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
