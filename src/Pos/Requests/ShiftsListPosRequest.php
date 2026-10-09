<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Pos\Types\ShiftsListPosRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Pos\Types\ShiftsListPosRequestFilterItem;

class ShiftsListPosRequest extends JsonSerializableType
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
     * @var ?array<ShiftsListPosRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ShiftsListPosRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ShiftsListPosRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ShiftsListPosRequestFilterItem::class])]
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
     *   sort?: ?array<ShiftsListPosRequestSortItem>,
     *   filter?: ?array<ShiftsListPosRequestFilterItem>,
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
