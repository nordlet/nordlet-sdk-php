<?php

namespace Nordlet\Fleet\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Fleet\Types\PostV1FleetAssignmentsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Fleet\Types\PostV1FleetAssignmentsListRequestFilterItem;

class PostV1FleetAssignmentsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1FleetAssignmentsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1FleetAssignmentsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1FleetAssignmentsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1FleetAssignmentsListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1FleetAssignmentsListRequestSortItem>,
     *   filter?: ?array<PostV1FleetAssignmentsListRequestFilterItem>,
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
