<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\RecognitionRunsListSalesRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Sales\Types\RecognitionRunsListSalesRequestFilterItem;

class RecognitionRunsListSalesRequest extends JsonSerializableType
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
     * @var ?array<RecognitionRunsListSalesRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([RecognitionRunsListSalesRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<RecognitionRunsListSalesRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([RecognitionRunsListSalesRequestFilterItem::class])]
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
     *   sort?: ?array<RecognitionRunsListSalesRequestSortItem>,
     *   filter?: ?array<RecognitionRunsListSalesRequestFilterItem>,
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
