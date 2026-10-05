<?php

namespace Nordlet\Fleet\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Fleet\Types\AssignmentsListFleetRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Fleet\Types\AssignmentsListFleetRequestFilterItem;

class AssignmentsListFleetRequest extends JsonSerializableType
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
     * @var ?array<AssignmentsListFleetRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([AssignmentsListFleetRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<AssignmentsListFleetRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([AssignmentsListFleetRequestFilterItem::class])]
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
     *   sort?: ?array<AssignmentsListFleetRequestSortItem>,
     *   filter?: ?array<AssignmentsListFleetRequestFilterItem>,
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
