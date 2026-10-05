<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\VatReviewsListPartnersRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Partners\Types\VatReviewsListPartnersRequestFilterItem;

class VatReviewsListPartnersRequest extends JsonSerializableType
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
     * @var ?array<VatReviewsListPartnersRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([VatReviewsListPartnersRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<VatReviewsListPartnersRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([VatReviewsListPartnersRequestFilterItem::class])]
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
     *   sort?: ?array<VatReviewsListPartnersRequestSortItem>,
     *   filter?: ?array<VatReviewsListPartnersRequestFilterItem>,
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
