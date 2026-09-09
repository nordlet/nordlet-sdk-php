<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsSubmissionsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Declarations\Types\PostV1DeclarationsSubmissionsListRequestFilterItem;

class PostV1DeclarationsSubmissionsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1DeclarationsSubmissionsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1DeclarationsSubmissionsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1DeclarationsSubmissionsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1DeclarationsSubmissionsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @var ?array<string> $totals Numeric fields to sum over every row matching the filter (not only the current page)
     */
    #[JsonProperty('totals'), ArrayType(['string'])]
    public ?array $totals;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1DeclarationsSubmissionsListRequestSortItem>,
     *   filter?: ?array<PostV1DeclarationsSubmissionsListRequestFilterItem>,
     *   totals?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->page = $values['page'] ?? null;
        $this->pageSize = $values['pageSize'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->filter = $values['filter'] ?? null;
        $this->totals = $values['totals'] ?? null;
    }
}
