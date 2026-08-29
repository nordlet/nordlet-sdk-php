<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Inventory\Types\PostV1InventoryReorderRulesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Inventory\Types\PostV1InventoryReorderRulesListRequestFilterItem;

class PostV1InventoryReorderRulesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1InventoryReorderRulesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1InventoryReorderRulesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1InventoryReorderRulesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1InventoryReorderRulesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1InventoryReorderRulesListRequestSortItem>,
     *   filter?: ?array<PostV1InventoryReorderRulesListRequestFilterItem>,
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
