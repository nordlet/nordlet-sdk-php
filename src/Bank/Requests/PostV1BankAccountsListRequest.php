<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankAccountsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Bank\Types\PostV1BankAccountsListRequestFilterItem;

class PostV1BankAccountsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1BankAccountsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1BankAccountsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1BankAccountsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1BankAccountsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1BankAccountsListRequestSortItem>,
     *   filter?: ?array<PostV1BankAccountsListRequestFilterItem>,
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
