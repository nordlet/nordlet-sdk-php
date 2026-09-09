<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reference\Types\PostV1ReferenceVatClassifiersListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Reference\Types\PostV1ReferenceVatClassifiersListRequestFilterItem;

class PostV1ReferenceVatClassifiersListRequest extends JsonSerializableType
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
     * @var ?array<PostV1ReferenceVatClassifiersListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1ReferenceVatClassifiersListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1ReferenceVatClassifiersListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1ReferenceVatClassifiersListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1ReferenceVatClassifiersListRequestSortItem>,
     *   filter?: ?array<PostV1ReferenceVatClassifiersListRequestFilterItem>,
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
