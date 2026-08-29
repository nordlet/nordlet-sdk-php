<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankMandatesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Bank\Types\PostV1BankMandatesListRequestFilterItem;

class PostV1BankMandatesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1BankMandatesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1BankMandatesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1BankMandatesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1BankMandatesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1BankMandatesListRequestSortItem>,
     *   filter?: ?array<PostV1BankMandatesListRequestFilterItem>,
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
