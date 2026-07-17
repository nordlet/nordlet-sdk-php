<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Pos\Types\PostV1PosReportsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Pos\Types\PostV1PosReportsListRequestFilterItem;

class PostV1PosReportsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1PosReportsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1PosReportsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1PosReportsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1PosReportsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1PosReportsListRequestSortItem>,
     *   filter?: ?array<PostV1PosReportsListRequestFilterItem>,
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
