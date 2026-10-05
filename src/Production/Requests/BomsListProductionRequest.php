<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\BomsListProductionRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Production\Types\BomsListProductionRequestFilterItem;

class BomsListProductionRequest extends JsonSerializableType
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
     * @var ?array<BomsListProductionRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([BomsListProductionRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<BomsListProductionRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([BomsListProductionRequestFilterItem::class])]
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
     *   sort?: ?array<BomsListProductionRequestSortItem>,
     *   filter?: ?array<BomsListProductionRequestFilterItem>,
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
