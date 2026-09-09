<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1PartnersDebtRemindersListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Partners\Types\PostV1PartnersDebtRemindersListRequestFilterItem;

class PostV1PartnersDebtRemindersListRequest extends JsonSerializableType
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
     * @var ?array<PostV1PartnersDebtRemindersListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1PartnersDebtRemindersListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1PartnersDebtRemindersListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1PartnersDebtRemindersListRequestFilterItem::class])]
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
     *   sort?: ?array<PostV1PartnersDebtRemindersListRequestSortItem>,
     *   filter?: ?array<PostV1PartnersDebtRemindersListRequestFilterItem>,
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
