<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1InventoryStockLevelsResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1InventoryStockLevelsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1InventoryStockLevelsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1InventoryStockLevelsResponseRowsItem>,
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
