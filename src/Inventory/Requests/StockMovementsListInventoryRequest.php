<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Inventory\Types\StockMovementsListInventoryRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Inventory\Types\StockMovementsListInventoryRequestFilterItem;

class StockMovementsListInventoryRequest extends JsonSerializableType
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
     * @var ?array<StockMovementsListInventoryRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([StockMovementsListInventoryRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<StockMovementsListInventoryRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([StockMovementsListInventoryRequestFilterItem::class])]
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
     *   sort?: ?array<StockMovementsListInventoryRequestSortItem>,
     *   filter?: ?array<StockMovementsListInventoryRequestFilterItem>,
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
