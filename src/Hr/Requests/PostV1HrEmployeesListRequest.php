<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PostV1HrEmployeesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Hr\Types\PostV1HrEmployeesListRequestFilterItem;

class PostV1HrEmployeesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1HrEmployeesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1HrEmployeesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1HrEmployeesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1HrEmployeesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1HrEmployeesListRequestSortItem>,
     *   filter?: ?array<PostV1HrEmployeesListRequestFilterItem>,
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
