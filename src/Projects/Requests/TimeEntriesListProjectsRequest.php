<?php

namespace Nordlet\Projects\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Projects\Types\TimeEntriesListProjectsRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Projects\Types\TimeEntriesListProjectsRequestFilterItem;

class TimeEntriesListProjectsRequest extends JsonSerializableType
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
     * @var ?array<TimeEntriesListProjectsRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([TimeEntriesListProjectsRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<TimeEntriesListProjectsRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([TimeEntriesListProjectsRequestFilterItem::class])]
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
     *   sort?: ?array<TimeEntriesListProjectsRequestSortItem>,
     *   filter?: ?array<TimeEntriesListProjectsRequestFilterItem>,
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
