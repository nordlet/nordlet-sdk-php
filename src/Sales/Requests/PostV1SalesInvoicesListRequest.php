<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\PostV1SalesInvoicesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Sales\Types\PostV1SalesInvoicesListRequestFilterItem;

class PostV1SalesInvoicesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1SalesInvoicesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1SalesInvoicesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1SalesInvoicesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1SalesInvoicesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1SalesInvoicesListRequestSortItem>,
     *   filter?: ?array<PostV1SalesInvoicesListRequestFilterItem>,
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
