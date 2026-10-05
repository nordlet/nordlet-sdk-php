<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Pos\Types\ReportsListPosRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Pos\Types\ReportsListPosRequestFilterItem;

class ReportsListPosRequest extends JsonSerializableType
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
     * @var ?array<ReportsListPosRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ReportsListPosRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ReportsListPosRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ReportsListPosRequestFilterItem::class])]
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
     *   sort?: ?array<ReportsListPosRequestSortItem>,
     *   filter?: ?array<ReportsListPosRequestFilterItem>,
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
