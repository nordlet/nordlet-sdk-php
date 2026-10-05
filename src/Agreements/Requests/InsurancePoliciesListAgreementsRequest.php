<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\InsurancePoliciesListAgreementsRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Agreements\Types\InsurancePoliciesListAgreementsRequestFilterItem;

class InsurancePoliciesListAgreementsRequest extends JsonSerializableType
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
     * @var ?array<InsurancePoliciesListAgreementsRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([InsurancePoliciesListAgreementsRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<InsurancePoliciesListAgreementsRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([InsurancePoliciesListAgreementsRequestFilterItem::class])]
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
     *   sort?: ?array<InsurancePoliciesListAgreementsRequestSortItem>,
     *   filter?: ?array<InsurancePoliciesListAgreementsRequestFilterItem>,
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
