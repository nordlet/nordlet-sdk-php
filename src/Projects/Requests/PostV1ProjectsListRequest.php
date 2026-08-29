<?php

namespace Nordlet\Projects\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Projects\Types\PostV1ProjectsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Projects\Types\PostV1ProjectsListRequestFilterItem;

class PostV1ProjectsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1ProjectsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1ProjectsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1ProjectsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1ProjectsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1ProjectsListRequestSortItem>,
     *   filter?: ?array<PostV1ProjectsListRequestFilterItem>,
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
