<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Payroll\Types\RunsListPayrollRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Payroll\Types\RunsListPayrollRequestFilterItem;

class RunsListPayrollRequest extends JsonSerializableType
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
     * @var ?array<RunsListPayrollRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([RunsListPayrollRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<RunsListPayrollRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([RunsListPayrollRequestFilterItem::class])]
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
     *   sort?: ?array<RunsListPayrollRequestSortItem>,
     *   filter?: ?array<RunsListPayrollRequestFilterItem>,
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
