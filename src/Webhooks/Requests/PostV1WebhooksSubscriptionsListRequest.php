<?php

namespace Nordlet\Webhooks\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Webhooks\Types\PostV1WebhooksSubscriptionsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Webhooks\Types\PostV1WebhooksSubscriptionsListRequestFilterItem;

class PostV1WebhooksSubscriptionsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1WebhooksSubscriptionsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1WebhooksSubscriptionsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1WebhooksSubscriptionsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1WebhooksSubscriptionsListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1WebhooksSubscriptionsListRequestSortItem>,
     *   filter?: ?array<PostV1WebhooksSubscriptionsListRequestFilterItem>,
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
