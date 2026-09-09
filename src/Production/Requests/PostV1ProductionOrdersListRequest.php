<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\PostV1ProductionOrdersListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Production\Types\PostV1ProductionOrdersListRequestFilterItem;

class PostV1ProductionOrdersListRequest extends JsonSerializableType
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
     * @var ?array<PostV1ProductionOrdersListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1ProductionOrdersListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1ProductionOrdersListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1ProductionOrdersListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1ProductionOrdersListRequestSortItem>,
     *   filter?: ?array<PostV1ProductionOrdersListRequestFilterItem>,
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
