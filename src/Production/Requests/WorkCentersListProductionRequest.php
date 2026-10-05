<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\WorkCentersListProductionRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Production\Types\WorkCentersListProductionRequestFilterItem;

class WorkCentersListProductionRequest extends JsonSerializableType
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
     * @var ?array<WorkCentersListProductionRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([WorkCentersListProductionRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<WorkCentersListProductionRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([WorkCentersListProductionRequestFilterItem::class])]
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
     *   sort?: ?array<WorkCentersListProductionRequestSortItem>,
     *   filter?: ?array<WorkCentersListProductionRequestFilterItem>,
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
