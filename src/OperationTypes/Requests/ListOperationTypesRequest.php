<?php

namespace Nordlet\OperationTypes\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\OperationTypes\Types\ListOperationTypesRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\OperationTypes\Types\ListOperationTypesRequestFilterItem;

class ListOperationTypesRequest extends JsonSerializableType
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
     * @var ?array<ListOperationTypesRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ListOperationTypesRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ListOperationTypesRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ListOperationTypesRequestFilterItem::class])]
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
     *   sort?: ?array<ListOperationTypesRequestSortItem>,
     *   filter?: ?array<ListOperationTypesRequestFilterItem>,
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
