<?php

namespace Nordlet\Ecommerce\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StockListEcommerceResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

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
     * @var string $available
     */
    #[JsonProperty('available')]
    public string $available;

    /**
     * @param array{
     *   itemId: string,
     *   warehouseId: string,
     *   onHand: string,
     *   reserved: string,
     *   available: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
        $this->warehouseId = $values['warehouseId'];
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
