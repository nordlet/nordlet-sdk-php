<?php

namespace Nordlet\Cash\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Cash\Types\PostV1CashOrdersListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Cash\Types\PostV1CashOrdersListRequestFilterItem;

class PostV1CashOrdersListRequest extends JsonSerializableType
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
     * @var ?array<PostV1CashOrdersListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1CashOrdersListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1CashOrdersListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1CashOrdersListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1CashOrdersListRequestSortItem>,
     *   filter?: ?array<PostV1CashOrdersListRequestFilterItem>,
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
