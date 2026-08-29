<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Inventory\Types\PostV1InventoryLandedCostsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Inventory\Types\PostV1InventoryLandedCostsListRequestFilterItem;

class PostV1InventoryLandedCostsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1InventoryLandedCostsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1InventoryLandedCostsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1InventoryLandedCostsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1InventoryLandedCostsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1InventoryLandedCostsListRequestSortItem>,
     *   filter?: ?array<PostV1InventoryLandedCostsListRequestFilterItem>,
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
