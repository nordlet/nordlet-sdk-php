<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsStockShortageRequest extends JsonSerializableType
{
    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @param array{
     *   warehouseId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->warehouseId = $values['warehouseId'] ?? null;
    }
}
