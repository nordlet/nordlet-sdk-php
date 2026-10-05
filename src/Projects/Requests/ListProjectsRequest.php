<?php

namespace Nordlet\Projects\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Projects\Types\ListProjectsRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Projects\Types\ListProjectsRequestFilterItem;

class ListProjectsRequest extends JsonSerializableType
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
     * @var ?array<ListProjectsRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ListProjectsRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ListProjectsRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ListProjectsRequestFilterItem::class])]
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
     *   sort?: ?array<ListProjectsRequestSortItem>,
     *   filter?: ?array<ListProjectsRequestFilterItem>,
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
