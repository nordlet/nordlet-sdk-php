<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Inventory\Types\PostV1InventoryLotsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Inventory\Types\PostV1InventoryLotsListRequestFilterItem;

class PostV1InventoryLotsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1InventoryLotsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1InventoryLotsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1InventoryLotsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1InventoryLotsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1InventoryLotsListRequestSortItem>,
     *   filter?: ?array<PostV1InventoryLotsListRequestFilterItem>,
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
