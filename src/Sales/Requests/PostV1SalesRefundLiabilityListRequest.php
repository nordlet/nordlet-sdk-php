<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\PostV1SalesRefundLiabilityListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Sales\Types\PostV1SalesRefundLiabilityListRequestFilterItem;

class PostV1SalesRefundLiabilityListRequest extends JsonSerializableType
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
     * @var ?array<PostV1SalesRefundLiabilityListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1SalesRefundLiabilityListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1SalesRefundLiabilityListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1SalesRefundLiabilityListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1SalesRefundLiabilityListRequestSortItem>,
     *   filter?: ?array<PostV1SalesRefundLiabilityListRequestFilterItem>,
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
