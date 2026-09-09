<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1PartnersContactsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Partners\Types\PostV1PartnersContactsListRequestFilterItem;

class PostV1PartnersContactsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1PartnersContactsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1PartnersContactsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1PartnersContactsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1PartnersContactsListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1PartnersContactsListRequestSortItem>,
     *   filter?: ?array<PostV1PartnersContactsListRequestFilterItem>,
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
