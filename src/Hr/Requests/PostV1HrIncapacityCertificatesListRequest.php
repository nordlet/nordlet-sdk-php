<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PostV1HrIncapacityCertificatesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Hr\Types\PostV1HrIncapacityCertificatesListRequestFilterItem;

class PostV1HrIncapacityCertificatesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1HrIncapacityCertificatesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1HrIncapacityCertificatesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1HrIncapacityCertificatesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1HrIncapacityCertificatesListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1HrIncapacityCertificatesListRequestSortItem>,
     *   filter?: ?array<PostV1HrIncapacityCertificatesListRequestFilterItem>,
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
