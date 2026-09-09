<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Inventory\Types\PostV1InventoryWarehousesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Inventory\Types\PostV1InventoryWarehousesListRequestFilterItem;

class PostV1InventoryWarehousesListRequest extends JsonSerializableType
{
    /**
     * @var ?int $page
     */
    #[JsonProperty('page')]
    public ?int $page;

    /**
     * @var ?int $pageSize
     */
    #[JsonProperty('pageSize')]
    public ?int $pageSize;

    /**
     * @var ?array<PostV1InventoryWarehousesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1InventoryWarehousesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1InventoryWarehousesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1InventoryWarehousesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @var ?array<string> $totals Numeric fields to sum over every row matching the filter (not only the current page)
     */
    #[JsonProperty('totals'), ArrayType(['string'])]
    public ?array $totals;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1InventoryWarehousesListRequestSortItem>,
     *   filter?: ?array<PostV1InventoryWarehousesListRequestFilterItem>,
     *   totals?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->page = $values['page'] ?? null;
        $this->pageSize = $values['pageSize'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->filter = $values['filter'] ?? null;
        $this->totals = $values['totals'] ?? null;
    }
}
