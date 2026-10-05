<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Inventory\Types\LotsListInventoryRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Inventory\Types\LotsListInventoryRequestFilterItem;

class LotsListInventoryRequest extends JsonSerializableType
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
     * @var ?array<LotsListInventoryRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([LotsListInventoryRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<LotsListInventoryRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([LotsListInventoryRequestFilterItem::class])]
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
     *   sort?: ?array<LotsListInventoryRequestSortItem>,
     *   filter?: ?array<LotsListInventoryRequestFilterItem>,
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
