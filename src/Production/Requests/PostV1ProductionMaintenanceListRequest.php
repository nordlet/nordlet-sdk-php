<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\PostV1ProductionMaintenanceListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Production\Types\PostV1ProductionMaintenanceListRequestFilterItem;

class PostV1ProductionMaintenanceListRequest extends JsonSerializableType
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
     * @var ?array<PostV1ProductionMaintenanceListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1ProductionMaintenanceListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1ProductionMaintenanceListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1ProductionMaintenanceListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1ProductionMaintenanceListRequestSortItem>,
     *   filter?: ?array<PostV1ProductionMaintenanceListRequestFilterItem>,
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
