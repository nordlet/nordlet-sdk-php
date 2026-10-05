<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\QualityChecksListProductionRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Production\Types\QualityChecksListProductionRequestFilterItem;

class QualityChecksListProductionRequest extends JsonSerializableType
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
     * @var ?array<QualityChecksListProductionRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([QualityChecksListProductionRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<QualityChecksListProductionRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([QualityChecksListProductionRequestFilterItem::class])]
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
     *   sort?: ?array<QualityChecksListProductionRequestSortItem>,
     *   filter?: ?array<QualityChecksListProductionRequestFilterItem>,
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
