<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\RecognitionSchedulesListSalesRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Sales\Types\RecognitionSchedulesListSalesRequestFilterItem;

class RecognitionSchedulesListSalesRequest extends JsonSerializableType
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
     * @var ?array<RecognitionSchedulesListSalesRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([RecognitionSchedulesListSalesRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<RecognitionSchedulesListSalesRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([RecognitionSchedulesListSalesRequestFilterItem::class])]
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
     *   sort?: ?array<RecognitionSchedulesListSalesRequestSortItem>,
     *   filter?: ?array<RecognitionSchedulesListSalesRequestFilterItem>,
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
