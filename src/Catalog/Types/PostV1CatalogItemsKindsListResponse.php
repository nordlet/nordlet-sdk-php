<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1CatalogItemsKindsListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1CatalogItemsKindsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1CatalogItemsKindsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1CatalogItemsKindsListResponseRowsItem>,
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
