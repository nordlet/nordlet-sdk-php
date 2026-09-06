<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankImportTemplatesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Bank\Types\PostV1BankImportTemplatesListRequestFilterItem;

class PostV1BankImportTemplatesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1BankImportTemplatesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1BankImportTemplatesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1BankImportTemplatesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1BankImportTemplatesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1BankImportTemplatesListRequestSortItem>,
     *   filter?: ?array<PostV1BankImportTemplatesListRequestFilterItem>,
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
