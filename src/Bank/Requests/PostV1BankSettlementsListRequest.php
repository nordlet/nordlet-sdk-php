<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankSettlementsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Bank\Types\PostV1BankSettlementsListRequestFilterItem;

class PostV1BankSettlementsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1BankSettlementsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1BankSettlementsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1BankSettlementsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1BankSettlementsListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1BankSettlementsListRequestSortItem>,
     *   filter?: ?array<PostV1BankSettlementsListRequestFilterItem>,
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
