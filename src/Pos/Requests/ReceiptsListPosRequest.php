<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Pos\Types\ReceiptsListPosRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Pos\Types\ReceiptsListPosRequestFilterItem;

class ReceiptsListPosRequest extends JsonSerializableType
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
     * @var ?array<ReceiptsListPosRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ReceiptsListPosRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ReceiptsListPosRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ReceiptsListPosRequestFilterItem::class])]
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
     *   sort?: ?array<ReceiptsListPosRequestSortItem>,
     *   filter?: ?array<ReceiptsListPosRequestFilterItem>,
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
