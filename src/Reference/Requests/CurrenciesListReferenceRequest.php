<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reference\Types\CurrenciesListReferenceRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Reference\Types\CurrenciesListReferenceRequestFilterItem;

class CurrenciesListReferenceRequest extends JsonSerializableType
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
     * @var ?array<CurrenciesListReferenceRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([CurrenciesListReferenceRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<CurrenciesListReferenceRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([CurrenciesListReferenceRequestFilterItem::class])]
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
     *   sort?: ?array<CurrenciesListReferenceRequestSortItem>,
     *   filter?: ?array<CurrenciesListReferenceRequestFilterItem>,
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
