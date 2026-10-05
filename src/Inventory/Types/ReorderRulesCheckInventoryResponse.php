<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ReorderRulesCheckInventoryResponse extends JsonSerializableType
{
    /**
     * @var array<ReorderRulesCheckInventoryResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ReorderRulesCheckInventoryResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ReorderRulesCheckInventoryResponseRowsItem>,
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
