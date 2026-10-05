<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItemGroupsListCatalogResponse extends JsonSerializableType
{
    /**
     * @var array<ItemGroupsListCatalogResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ItemGroupsListCatalogResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ItemGroupsListCatalogResponseRowsItem>,
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
