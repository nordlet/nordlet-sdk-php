<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItemsSuppliersListCatalogResponse extends JsonSerializableType
{
    /**
     * @var array<ItemsSuppliersListCatalogResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ItemsSuppliersListCatalogResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ItemsSuppliersListCatalogResponseRowsItem>,
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
