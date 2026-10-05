<?php

namespace Nordlet\Webhooks\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Webhooks\Types\SubscriptionsListWebhooksRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Webhooks\Types\SubscriptionsListWebhooksRequestFilterItem;

class SubscriptionsListWebhooksRequest extends JsonSerializableType
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
     * @var ?array<SubscriptionsListWebhooksRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([SubscriptionsListWebhooksRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<SubscriptionsListWebhooksRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([SubscriptionsListWebhooksRequestFilterItem::class])]
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
     *   sort?: ?array<SubscriptionsListWebhooksRequestSortItem>,
     *   filter?: ?array<SubscriptionsListWebhooksRequestFilterItem>,
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
