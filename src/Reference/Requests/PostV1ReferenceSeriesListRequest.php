<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reference\Types\PostV1ReferenceSeriesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Reference\Types\PostV1ReferenceSeriesListRequestFilterItem;

class PostV1ReferenceSeriesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1ReferenceSeriesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1ReferenceSeriesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1ReferenceSeriesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1ReferenceSeriesListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1ReferenceSeriesListRequestSortItem>,
     *   filter?: ?array<PostV1ReferenceSeriesListRequestFilterItem>,
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
