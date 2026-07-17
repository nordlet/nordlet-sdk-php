<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Catalog\Types\PostV1CatalogItemsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Catalog\Types\PostV1CatalogItemsListRequestFilterItem;

class PostV1CatalogItemsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1CatalogItemsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1CatalogItemsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1CatalogItemsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1CatalogItemsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1CatalogItemsListRequestSortItem>,
     *   filter?: ?array<PostV1CatalogItemsListRequestFilterItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->page = $values['page'] ?? null;
        $this->pageSize = $values['pageSize'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->filter = $values['filter'] ?? null;
    }
}
