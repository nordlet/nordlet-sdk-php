<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reference\Types\PostV1ReferenceCurrenciesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Reference\Types\PostV1ReferenceCurrenciesListRequestFilterItem;

class PostV1ReferenceCurrenciesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1ReferenceCurrenciesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1ReferenceCurrenciesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1ReferenceCurrenciesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1ReferenceCurrenciesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1ReferenceCurrenciesListRequestSortItem>,
     *   filter?: ?array<PostV1ReferenceCurrenciesListRequestFilterItem>,
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
