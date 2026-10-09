<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\BusinessTripsListHrRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Hr\Types\BusinessTripsListHrRequestFilterItem;

class BusinessTripsListHrRequest extends JsonSerializableType
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
     * @var ?array<BusinessTripsListHrRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([BusinessTripsListHrRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<BusinessTripsListHrRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([BusinessTripsListHrRequestFilterItem::class])]
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
     *   sort?: ?array<BusinessTripsListHrRequestSortItem>,
     *   filter?: ?array<BusinessTripsListHrRequestFilterItem>,
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
