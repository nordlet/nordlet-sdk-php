<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\PostV1LedgerJournalTransactionsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Ledger\Types\PostV1LedgerJournalTransactionsListRequestFilterItem;

class PostV1LedgerJournalTransactionsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1LedgerJournalTransactionsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1LedgerJournalTransactionsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1LedgerJournalTransactionsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1LedgerJournalTransactionsListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1LedgerJournalTransactionsListRequestSortItem>,
     *   filter?: ?array<PostV1LedgerJournalTransactionsListRequestFilterItem>,
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
