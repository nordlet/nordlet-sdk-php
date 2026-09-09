<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Inventory\Types\PostV1InventoryStockMovementsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Inventory\Types\PostV1InventoryStockMovementsListRequestFilterItem;

class PostV1InventoryStockMovementsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1InventoryStockMovementsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1InventoryStockMovementsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1InventoryStockMovementsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1InventoryStockMovementsListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1InventoryStockMovementsListRequestSortItem>,
     *   filter?: ?array<PostV1InventoryStockMovementsListRequestFilterItem>,
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
