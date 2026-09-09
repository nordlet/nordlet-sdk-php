<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\PostV1AgreementsInsurancePoliciesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Agreements\Types\PostV1AgreementsInsurancePoliciesListRequestFilterItem;

class PostV1AgreementsInsurancePoliciesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1AgreementsInsurancePoliciesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1AgreementsInsurancePoliciesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1AgreementsInsurancePoliciesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1AgreementsInsurancePoliciesListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1AgreementsInsurancePoliciesListRequestSortItem>,
     *   filter?: ?array<PostV1AgreementsInsurancePoliciesListRequestFilterItem>,
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
