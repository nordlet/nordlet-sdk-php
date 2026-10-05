<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PriceListsListCatalogResponse extends JsonSerializableType
{
    /**
     * @var array<PriceListsListCatalogResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PriceListsListCatalogResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PriceListsListCatalogResponseRowsItem>,
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
