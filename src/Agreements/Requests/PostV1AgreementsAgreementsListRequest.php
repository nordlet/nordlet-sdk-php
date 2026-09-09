<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\PostV1AgreementsAgreementsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Agreements\Types\PostV1AgreementsAgreementsListRequestFilterItem;

class PostV1AgreementsAgreementsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1AgreementsAgreementsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1AgreementsAgreementsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1AgreementsAgreementsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1AgreementsAgreementsListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1AgreementsAgreementsListRequestSortItem>,
     *   filter?: ?array<PostV1AgreementsAgreementsListRequestFilterItem>,
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
