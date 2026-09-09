<?php

namespace Nordlet\Files\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Files\Types\PostV1FilesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Files\Types\PostV1FilesListRequestFilterItem;

class PostV1FilesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1FilesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1FilesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1FilesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1FilesListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1FilesListRequestSortItem>,
     *   filter?: ?array<PostV1FilesListRequestFilterItem>,
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
