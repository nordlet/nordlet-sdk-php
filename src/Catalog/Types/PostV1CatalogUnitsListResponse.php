<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1CatalogUnitsListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1CatalogUnitsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1CatalogUnitsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1CatalogUnitsListResponseRowsItem>,
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
