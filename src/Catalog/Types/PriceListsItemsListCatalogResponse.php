<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PriceListsItemsListCatalogResponse extends JsonSerializableType
{
    /**
     * @var array<PriceListsItemsListCatalogResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PriceListsItemsListCatalogResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PriceListsItemsListCatalogResponseRowsItem>,
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
