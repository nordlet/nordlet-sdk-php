<?php

namespace Nordlet\Fleet\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Fleet\Types\PostV1FleetVehiclesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Fleet\Types\PostV1FleetVehiclesListRequestFilterItem;

class PostV1FleetVehiclesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1FleetVehiclesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1FleetVehiclesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1FleetVehiclesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1FleetVehiclesListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1FleetVehiclesListRequestSortItem>,
     *   filter?: ?array<PostV1FleetVehiclesListRequestFilterItem>,
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
