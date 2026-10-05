<?php

namespace Nordlet\DocumentSeries\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\DocumentSeries\Types\ListDocumentSeriesRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\DocumentSeries\Types\ListDocumentSeriesRequestFilterItem;

class ListDocumentSeriesRequest extends JsonSerializableType
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
     * @var ?array<ListDocumentSeriesRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ListDocumentSeriesRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ListDocumentSeriesRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ListDocumentSeriesRequestFilterItem::class])]
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
     *   sort?: ?array<ListDocumentSeriesRequestSortItem>,
     *   filter?: ?array<ListDocumentSeriesRequestFilterItem>,
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
