<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class StockLevelsInventoryResponse extends JsonSerializableType
{
    /**
     * @var array<StockLevelsInventoryResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([StockLevelsInventoryResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<StockLevelsInventoryResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
