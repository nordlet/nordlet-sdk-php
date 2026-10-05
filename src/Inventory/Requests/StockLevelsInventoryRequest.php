<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StockLevelsInventoryRequest extends JsonSerializableType
{
    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @param array{
     *   warehouseId?: ?string,
     *   itemId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->itemId = $values['itemId'] ?? null;
    }
}
