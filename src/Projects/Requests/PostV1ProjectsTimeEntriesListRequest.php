<?php

namespace Nordlet\Projects\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Projects\Types\PostV1ProjectsTimeEntriesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Projects\Types\PostV1ProjectsTimeEntriesListRequestFilterItem;

class PostV1ProjectsTimeEntriesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1ProjectsTimeEntriesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1ProjectsTimeEntriesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1ProjectsTimeEntriesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1ProjectsTimeEntriesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1ProjectsTimeEntriesListRequestSortItem>,
     *   filter?: ?array<PostV1ProjectsTimeEntriesListRequestFilterItem>,
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
