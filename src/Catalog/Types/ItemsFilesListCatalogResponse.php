<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItemsFilesListCatalogResponse extends JsonSerializableType
{
    /**
     * @var array<ItemsFilesListCatalogResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ItemsFilesListCatalogResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ItemsFilesListCatalogResponseRowsItem>,
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
