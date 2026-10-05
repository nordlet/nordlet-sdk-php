<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\RoutingsListProductionRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Production\Types\RoutingsListProductionRequestFilterItem;

class RoutingsListProductionRequest extends JsonSerializableType
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
     * @var ?array<RoutingsListProductionRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([RoutingsListProductionRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<RoutingsListProductionRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([RoutingsListProductionRequestFilterItem::class])]
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
     *   sort?: ?array<RoutingsListProductionRequestSortItem>,
     *   filter?: ?array<RoutingsListProductionRequestFilterItem>,
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
