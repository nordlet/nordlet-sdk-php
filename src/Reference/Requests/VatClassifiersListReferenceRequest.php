<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reference\Types\VatClassifiersListReferenceRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Reference\Types\VatClassifiersListReferenceRequestFilterItem;

class VatClassifiersListReferenceRequest extends JsonSerializableType
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
     * @var ?array<VatClassifiersListReferenceRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([VatClassifiersListReferenceRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<VatClassifiersListReferenceRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([VatClassifiersListReferenceRequestFilterItem::class])]
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
     *   sort?: ?array<VatClassifiersListReferenceRequestSortItem>,
     *   filter?: ?array<VatClassifiersListReferenceRequestFilterItem>,
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
