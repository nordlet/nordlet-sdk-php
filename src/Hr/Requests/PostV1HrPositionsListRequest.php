<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PostV1HrPositionsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Hr\Types\PostV1HrPositionsListRequestFilterItem;

class PostV1HrPositionsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1HrPositionsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1HrPositionsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1HrPositionsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1HrPositionsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1HrPositionsListRequestSortItem>,
     *   filter?: ?array<PostV1HrPositionsListRequestFilterItem>,
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
