<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PerDiemRatesListHrRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Hr\Types\PerDiemRatesListHrRequestFilterItem;

class PerDiemRatesListHrRequest extends JsonSerializableType
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
     * @var ?array<PerDiemRatesListHrRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PerDiemRatesListHrRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PerDiemRatesListHrRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PerDiemRatesListHrRequestFilterItem::class])]
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
     *   sort?: ?array<PerDiemRatesListHrRequestSortItem>,
     *   filter?: ?array<PerDiemRatesListHrRequestFilterItem>,
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
