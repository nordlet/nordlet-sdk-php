<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\DebtRemindersListPartnersRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Partners\Types\DebtRemindersListPartnersRequestFilterItem;

class DebtRemindersListPartnersRequest extends JsonSerializableType
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
     * @var ?array<DebtRemindersListPartnersRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([DebtRemindersListPartnersRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<DebtRemindersListPartnersRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([DebtRemindersListPartnersRequestFilterItem::class])]
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
     *   sort?: ?array<DebtRemindersListPartnersRequestSortItem>,
     *   filter?: ?array<DebtRemindersListPartnersRequestFilterItem>,
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
