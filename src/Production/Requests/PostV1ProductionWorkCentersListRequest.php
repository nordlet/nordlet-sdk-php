<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\PostV1ProductionWorkCentersListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Production\Types\PostV1ProductionWorkCentersListRequestFilterItem;

class PostV1ProductionWorkCentersListRequest extends JsonSerializableType
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
     * @var ?array<PostV1ProductionWorkCentersListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1ProductionWorkCentersListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1ProductionWorkCentersListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1ProductionWorkCentersListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1ProductionWorkCentersListRequestSortItem>,
     *   filter?: ?array<PostV1ProductionWorkCentersListRequestFilterItem>,
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
