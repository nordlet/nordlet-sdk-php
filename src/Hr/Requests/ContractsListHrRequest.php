<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\ContractsListHrRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Hr\Types\ContractsListHrRequestFilterItem;

class ContractsListHrRequest extends JsonSerializableType
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
     * @var ?array<ContractsListHrRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ContractsListHrRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ContractsListHrRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ContractsListHrRequestFilterItem::class])]
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
     *   sort?: ?array<ContractsListHrRequestSortItem>,
     *   filter?: ?array<ContractsListHrRequestFilterItem>,
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
