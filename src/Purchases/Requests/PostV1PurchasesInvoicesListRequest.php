<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Purchases\Types\PostV1PurchasesInvoicesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Purchases\Types\PostV1PurchasesInvoicesListRequestFilterItem;

class PostV1PurchasesInvoicesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1PurchasesInvoicesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1PurchasesInvoicesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1PurchasesInvoicesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1PurchasesInvoicesListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1PurchasesInvoicesListRequestSortItem>,
     *   filter?: ?array<PostV1PurchasesInvoicesListRequestFilterItem>,
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
