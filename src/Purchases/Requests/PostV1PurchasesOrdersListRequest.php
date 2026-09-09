<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Purchases\Types\PostV1PurchasesOrdersListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Purchases\Types\PostV1PurchasesOrdersListRequestFilterItem;

class PostV1PurchasesOrdersListRequest extends JsonSerializableType
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
     * @var ?array<PostV1PurchasesOrdersListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1PurchasesOrdersListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1PurchasesOrdersListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1PurchasesOrdersListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1PurchasesOrdersListRequestSortItem>,
     *   filter?: ?array<PostV1PurchasesOrdersListRequestFilterItem>,
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
