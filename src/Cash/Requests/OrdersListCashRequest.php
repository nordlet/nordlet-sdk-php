<?php

namespace Nordlet\Cash\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Cash\Types\OrdersListCashRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Cash\Types\OrdersListCashRequestFilterItem;

class OrdersListCashRequest extends JsonSerializableType
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
     * @var ?array<OrdersListCashRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([OrdersListCashRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<OrdersListCashRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([OrdersListCashRequestFilterItem::class])]
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
     *   sort?: ?array<OrdersListCashRequestSortItem>,
     *   filter?: ?array<OrdersListCashRequestFilterItem>,
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
