<?php

namespace Nordlet\PlatformSellers\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\PlatformSellers\Types\ListPlatformSellersRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\PlatformSellers\Types\ListPlatformSellersRequestFilterItem;

class ListPlatformSellersRequest extends JsonSerializableType
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
     * @var ?array<ListPlatformSellersRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ListPlatformSellersRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ListPlatformSellersRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ListPlatformSellersRequestFilterItem::class])]
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
     *   sort?: ?array<ListPlatformSellersRequestSortItem>,
     *   filter?: ?array<ListPlatformSellersRequestFilterItem>,
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
