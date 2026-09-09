<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1PartnersAddressesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Partners\Types\PostV1PartnersAddressesListRequestFilterItem;

class PostV1PartnersAddressesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1PartnersAddressesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1PartnersAddressesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1PartnersAddressesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1PartnersAddressesListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1PartnersAddressesListRequestSortItem>,
     *   filter?: ?array<PostV1PartnersAddressesListRequestFilterItem>,
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
