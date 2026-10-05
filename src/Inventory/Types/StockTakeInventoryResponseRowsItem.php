<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StockTakeInventoryResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

    /**
     * @var string $onHand
     */
    #[JsonProperty('onHand')]
    public string $onHand;

    /**
     * @var string $counted
     */
    #[JsonProperty('counted')]
    public string $counted;

    /**
     * @var string $difference
     */
    #[JsonProperty('difference')]
    public string $difference;

    /**
     * @var string $adjustmentCost
     */
    #[JsonProperty('adjustmentCost')]
    public string $adjustmentCost;

    /**
     * @param array{
     *   itemId: string,
     *   onHand: string,
     *   counted: string,
     *   difference: string,
     *   adjustmentCost: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
        $this->onHand = $values['onHand'];
        $this->counted = $values['counted'];
        $this->difference = $values['difference'];
        $this->adjustmentCost = $values['adjustmentCost'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
