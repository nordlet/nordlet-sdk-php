<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\JournalTransactionsListLedgerRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Ledger\Types\JournalTransactionsListLedgerRequestFilterItem;

class JournalTransactionsListLedgerRequest extends JsonSerializableType
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
     * @var ?array<JournalTransactionsListLedgerRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([JournalTransactionsListLedgerRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<JournalTransactionsListLedgerRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([JournalTransactionsListLedgerRequestFilterItem::class])]
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
     *   sort?: ?array<JournalTransactionsListLedgerRequestSortItem>,
     *   filter?: ?array<JournalTransactionsListLedgerRequestFilterItem>,
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
