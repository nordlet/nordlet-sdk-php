<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\TypesListAgreementsRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Agreements\Types\TypesListAgreementsRequestFilterItem;

class TypesListAgreementsRequest extends JsonSerializableType
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
     * @var ?array<TypesListAgreementsRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([TypesListAgreementsRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<TypesListAgreementsRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([TypesListAgreementsRequestFilterItem::class])]
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
     *   sort?: ?array<TypesListAgreementsRequestSortItem>,
     *   filter?: ?array<TypesListAgreementsRequestFilterItem>,
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
