<?php

namespace Nordlet\Webhooks\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Webhooks\Types\DeliveriesListWebhooksRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Webhooks\Types\DeliveriesListWebhooksRequestFilterItem;

class DeliveriesListWebhooksRequest extends JsonSerializableType
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
     * @var ?array<DeliveriesListWebhooksRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([DeliveriesListWebhooksRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<DeliveriesListWebhooksRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([DeliveriesListWebhooksRequestFilterItem::class])]
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
     *   sort?: ?array<DeliveriesListWebhooksRequestSortItem>,
     *   filter?: ?array<DeliveriesListWebhooksRequestFilterItem>,
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
