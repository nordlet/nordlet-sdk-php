<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\CostCentersListLedgerRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Ledger\Types\CostCentersListLedgerRequestFilterItem;

class CostCentersListLedgerRequest extends JsonSerializableType
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
     * @var ?array<CostCentersListLedgerRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([CostCentersListLedgerRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<CostCentersListLedgerRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([CostCentersListLedgerRequestFilterItem::class])]
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
     *   sort?: ?array<CostCentersListLedgerRequestSortItem>,
     *   filter?: ?array<CostCentersListLedgerRequestFilterItem>,
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
