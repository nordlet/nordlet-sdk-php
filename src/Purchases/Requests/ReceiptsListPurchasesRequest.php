<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Purchases\Types\ReceiptsListPurchasesRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Purchases\Types\ReceiptsListPurchasesRequestFilterItem;

class ReceiptsListPurchasesRequest extends JsonSerializableType
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
     * @var ?array<ReceiptsListPurchasesRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ReceiptsListPurchasesRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ReceiptsListPurchasesRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ReceiptsListPurchasesRequestFilterItem::class])]
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
     *   sort?: ?array<ReceiptsListPurchasesRequestSortItem>,
     *   filter?: ?array<ReceiptsListPurchasesRequestFilterItem>,
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
