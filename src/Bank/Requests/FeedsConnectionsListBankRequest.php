<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\FeedsConnectionsListBankRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Bank\Types\FeedsConnectionsListBankRequestFilterItem;

class FeedsConnectionsListBankRequest extends JsonSerializableType
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
     * @var ?array<FeedsConnectionsListBankRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([FeedsConnectionsListBankRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<FeedsConnectionsListBankRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([FeedsConnectionsListBankRequestFilterItem::class])]
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
     *   sort?: ?array<FeedsConnectionsListBankRequestSortItem>,
     *   filter?: ?array<FeedsConnectionsListBankRequestFilterItem>,
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
