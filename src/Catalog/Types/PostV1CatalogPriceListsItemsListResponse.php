<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1CatalogPriceListsItemsListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1CatalogPriceListsItemsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1CatalogPriceListsItemsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1CatalogPriceListsItemsListResponseRowsItem>,
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
