<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItemsKindsListCatalogResponse extends JsonSerializableType
{
    /**
     * @var array<ItemsKindsListCatalogResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ItemsKindsListCatalogResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ItemsKindsListCatalogResponseRowsItem>,
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
