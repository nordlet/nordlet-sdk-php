<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Pos\Types\RefundsListPosRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Pos\Types\RefundsListPosRequestFilterItem;

class RefundsListPosRequest extends JsonSerializableType
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
     * @var ?array<RefundsListPosRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([RefundsListPosRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<RefundsListPosRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([RefundsListPosRequestFilterItem::class])]
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
     *   sort?: ?array<RefundsListPosRequestSortItem>,
     *   filter?: ?array<RefundsListPosRequestFilterItem>,
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
