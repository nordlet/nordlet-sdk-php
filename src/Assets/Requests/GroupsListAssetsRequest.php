<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Assets\Types\GroupsListAssetsRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Assets\Types\GroupsListAssetsRequestFilterItem;

class GroupsListAssetsRequest extends JsonSerializableType
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
     * @var ?array<GroupsListAssetsRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([GroupsListAssetsRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<GroupsListAssetsRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([GroupsListAssetsRequestFilterItem::class])]
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
     *   sort?: ?array<GroupsListAssetsRequestSortItem>,
     *   filter?: ?array<GroupsListAssetsRequestFilterItem>,
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
