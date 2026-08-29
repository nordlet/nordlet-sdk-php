<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1InventoryReorderRulesCheckResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1InventoryReorderRulesCheckResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1InventoryReorderRulesCheckResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1InventoryReorderRulesCheckResponseRowsItem>,
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
