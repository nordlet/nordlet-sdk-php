<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Assets\Types\PostV1AssetsGroupsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Assets\Types\PostV1AssetsGroupsListRequestFilterItem;

class PostV1AssetsGroupsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1AssetsGroupsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1AssetsGroupsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1AssetsGroupsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1AssetsGroupsListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1AssetsGroupsListRequestSortItem>,
     *   filter?: ?array<PostV1AssetsGroupsListRequestFilterItem>,
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
