<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Inventory\Types\ReorderRulesListInventoryRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Inventory\Types\ReorderRulesListInventoryRequestFilterItem;

class ReorderRulesListInventoryRequest extends JsonSerializableType
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
     * @var ?array<ReorderRulesListInventoryRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ReorderRulesListInventoryRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ReorderRulesListInventoryRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ReorderRulesListInventoryRequestFilterItem::class])]
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
     *   sort?: ?array<ReorderRulesListInventoryRequestSortItem>,
     *   filter?: ?array<ReorderRulesListInventoryRequestFilterItem>,
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
