<?php

namespace Nordlet\Webhooks\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Webhooks\Types\PostV1WebhooksDeliveriesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Webhooks\Types\PostV1WebhooksDeliveriesListRequestFilterItem;

class PostV1WebhooksDeliveriesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1WebhooksDeliveriesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1WebhooksDeliveriesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1WebhooksDeliveriesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1WebhooksDeliveriesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1WebhooksDeliveriesListRequestSortItem>,
     *   filter?: ?array<PostV1WebhooksDeliveriesListRequestFilterItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->page = $values['page'] ?? null;
        $this->pageSize = $values['pageSize'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->filter = $values['filter'] ?? null;
    }
}
