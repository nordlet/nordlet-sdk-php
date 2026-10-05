<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reference\Types\SeriesListReferenceRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Reference\Types\SeriesListReferenceRequestFilterItem;

class SeriesListReferenceRequest extends JsonSerializableType
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
     * @var ?array<SeriesListReferenceRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([SeriesListReferenceRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<SeriesListReferenceRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([SeriesListReferenceRequestFilterItem::class])]
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
     *   sort?: ?array<SeriesListReferenceRequestSortItem>,
     *   filter?: ?array<SeriesListReferenceRequestFilterItem>,
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
