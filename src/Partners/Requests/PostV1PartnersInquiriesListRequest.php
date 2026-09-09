<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1PartnersInquiriesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Partners\Types\PostV1PartnersInquiriesListRequestFilterItem;

class PostV1PartnersInquiriesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1PartnersInquiriesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1PartnersInquiriesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1PartnersInquiriesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1PartnersInquiriesListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1PartnersInquiriesListRequestSortItem>,
     *   filter?: ?array<PostV1PartnersInquiriesListRequestFilterItem>,
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
