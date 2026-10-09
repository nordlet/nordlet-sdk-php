<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Purchases\Types\DeferralsListPurchasesRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Purchases\Types\DeferralsListPurchasesRequestFilterItem;

class DeferralsListPurchasesRequest extends JsonSerializableType
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
     * @var ?array<DeferralsListPurchasesRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([DeferralsListPurchasesRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<DeferralsListPurchasesRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([DeferralsListPurchasesRequestFilterItem::class])]
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
     *   sort?: ?array<DeferralsListPurchasesRequestSortItem>,
     *   filter?: ?array<DeferralsListPurchasesRequestFilterItem>,
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
