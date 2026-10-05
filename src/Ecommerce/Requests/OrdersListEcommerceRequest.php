<?php

namespace Nordlet\Ecommerce\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ecommerce\Types\OrdersListEcommerceRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Ecommerce\Types\OrdersListEcommerceRequestFilterItem;

class OrdersListEcommerceRequest extends JsonSerializableType
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
     * @var ?array<OrdersListEcommerceRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([OrdersListEcommerceRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<OrdersListEcommerceRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([OrdersListEcommerceRequestFilterItem::class])]
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
     *   sort?: ?array<OrdersListEcommerceRequestSortItem>,
     *   filter?: ?array<OrdersListEcommerceRequestFilterItem>,
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
