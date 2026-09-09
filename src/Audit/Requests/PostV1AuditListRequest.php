<?php

namespace Nordlet\Audit\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Audit\Types\PostV1AuditListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Audit\Types\PostV1AuditListRequestFilterItem;

class PostV1AuditListRequest extends JsonSerializableType
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
     * @var ?array<PostV1AuditListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1AuditListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1AuditListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1AuditListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1AuditListRequestSortItem>,
     *   filter?: ?array<PostV1AuditListRequestFilterItem>,
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
