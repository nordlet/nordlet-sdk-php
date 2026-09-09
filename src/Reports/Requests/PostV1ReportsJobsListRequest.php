<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reports\Types\PostV1ReportsJobsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Reports\Types\PostV1ReportsJobsListRequestFilterItem;

class PostV1ReportsJobsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1ReportsJobsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1ReportsJobsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1ReportsJobsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1ReportsJobsListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1ReportsJobsListRequestSortItem>,
     *   filter?: ?array<PostV1ReportsJobsListRequestFilterItem>,
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
