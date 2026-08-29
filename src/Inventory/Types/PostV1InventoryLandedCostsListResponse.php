<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1InventoryLandedCostsListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1InventoryLandedCostsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1InventoryLandedCostsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @var int $page
     */
    #[JsonProperty('page')]
    public int $page;

    /**
     * @var int $pageSize
     */
    #[JsonProperty('pageSize')]
    public int $pageSize;

    /**
     * @var int $total
     */
    #[JsonProperty('total')]
    public int $total;

    /**
     * @param array{
     *   rows: array<PostV1InventoryLandedCostsListResponseRowsItem>,
     *   page: int,
     *   pageSize: int,
     *   total: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
        $this->page = $values['page'];
        $this->pageSize = $values['pageSize'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
