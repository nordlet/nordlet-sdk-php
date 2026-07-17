<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Assets\Types\PostV1AssetsAssetsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Assets\Types\PostV1AssetsAssetsListRequestFilterItem;

class PostV1AssetsAssetsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1AssetsAssetsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1AssetsAssetsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1AssetsAssetsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1AssetsAssetsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1AssetsAssetsListRequestSortItem>,
     *   filter?: ?array<PostV1AssetsAssetsListRequestFilterItem>,
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
