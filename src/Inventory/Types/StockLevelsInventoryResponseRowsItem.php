<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StockLevelsInventoryResponseRowsItem extends JsonSerializableType
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
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   itemId: string,
     *   warehouseId: string,
     *   quantity: string,
     *   value: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
        $this->warehouseId = $values['warehouseId'];
        $this->quantity = $values['quantity'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
