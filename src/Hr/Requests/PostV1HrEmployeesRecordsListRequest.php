<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PostV1HrEmployeesRecordsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Hr\Types\PostV1HrEmployeesRecordsListRequestFilterItem;

class PostV1HrEmployeesRecordsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1HrEmployeesRecordsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1HrEmployeesRecordsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1HrEmployeesRecordsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1HrEmployeesRecordsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1HrEmployeesRecordsListRequestSortItem>,
     *   filter?: ?array<PostV1HrEmployeesRecordsListRequestFilterItem>,
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
