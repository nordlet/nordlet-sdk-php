<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\IncapacityCertificatesListHrRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Hr\Types\IncapacityCertificatesListHrRequestFilterItem;

class IncapacityCertificatesListHrRequest extends JsonSerializableType
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
     * @var ?array<IncapacityCertificatesListHrRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([IncapacityCertificatesListHrRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<IncapacityCertificatesListHrRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([IncapacityCertificatesListHrRequestFilterItem::class])]
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
     *   sort?: ?array<IncapacityCertificatesListHrRequestSortItem>,
     *   filter?: ?array<IncapacityCertificatesListHrRequestFilterItem>,
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
