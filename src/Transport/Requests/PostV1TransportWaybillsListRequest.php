<?php

namespace Nordlet\Transport\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Transport\Types\PostV1TransportWaybillsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Transport\Types\PostV1TransportWaybillsListRequestFilterItem;

class PostV1TransportWaybillsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1TransportWaybillsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1TransportWaybillsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1TransportWaybillsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1TransportWaybillsListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1TransportWaybillsListRequestSortItem>,
     *   filter?: ?array<PostV1TransportWaybillsListRequestFilterItem>,
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
