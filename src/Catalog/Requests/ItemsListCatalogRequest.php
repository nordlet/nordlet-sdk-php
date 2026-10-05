<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Catalog\Types\ItemsListCatalogRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Catalog\Types\ItemsListCatalogRequestFilterItem;

class ItemsListCatalogRequest extends JsonSerializableType
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
     * @var ?array<ItemsListCatalogRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ItemsListCatalogRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ItemsListCatalogRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ItemsListCatalogRequestFilterItem::class])]
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
     *   sort?: ?array<ItemsListCatalogRequestSortItem>,
     *   filter?: ?array<ItemsListCatalogRequestFilterItem>,
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
