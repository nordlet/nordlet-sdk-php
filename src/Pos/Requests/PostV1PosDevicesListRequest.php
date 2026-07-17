<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Pos\Types\PostV1PosDevicesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Pos\Types\PostV1PosDevicesListRequestFilterItem;

class PostV1PosDevicesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1PosDevicesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1PosDevicesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1PosDevicesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1PosDevicesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1PosDevicesListRequestSortItem>,
     *   filter?: ?array<PostV1PosDevicesListRequestFilterItem>,
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
