<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\CostCenterGroupsListLedgerRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Ledger\Types\CostCenterGroupsListLedgerRequestFilterItem;

class CostCenterGroupsListLedgerRequest extends JsonSerializableType
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
     * @var ?array<CostCenterGroupsListLedgerRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([CostCenterGroupsListLedgerRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<CostCenterGroupsListLedgerRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([CostCenterGroupsListLedgerRequestFilterItem::class])]
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
     *   sort?: ?array<CostCenterGroupsListLedgerRequestSortItem>,
     *   filter?: ?array<CostCenterGroupsListLedgerRequestFilterItem>,
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
