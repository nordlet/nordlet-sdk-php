<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Payroll\Types\PostV1PayrollRunsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Payroll\Types\PostV1PayrollRunsListRequestFilterItem;

class PostV1PayrollRunsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1PayrollRunsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1PayrollRunsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1PayrollRunsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1PayrollRunsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1PayrollRunsListRequestSortItem>,
     *   filter?: ?array<PostV1PayrollRunsListRequestFilterItem>,
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
