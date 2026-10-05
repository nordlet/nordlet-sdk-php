<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StockShortageReportsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

    /**
     * @var string $itemName
     */
    #[JsonProperty('itemName')]
    public string $itemName;

    /**
     * @var string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public string $warehouseId;

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
     * @var string $shortage
     */
    #[JsonProperty('shortage')]
    public string $shortage;

    /**
     * @param array{
     *   itemId: string,
     *   itemName: string,
     *   warehouseId: string,
     *   onHand: string,
     *   reserved: string,
     *   shortage: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
        $this->itemName = $values['itemName'];
        $this->warehouseId = $values['warehouseId'];
        $this->onHand = $values['onHand'];
        $this->reserved = $values['reserved'];
        $this->shortage = $values['shortage'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
