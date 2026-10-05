<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\ContactsListPartnersRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Partners\Types\ContactsListPartnersRequestFilterItem;

class ContactsListPartnersRequest extends JsonSerializableType
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
     * @var ?array<ContactsListPartnersRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ContactsListPartnersRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ContactsListPartnersRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ContactsListPartnersRequestFilterItem::class])]
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
     *   sort?: ?array<ContactsListPartnersRequestSortItem>,
     *   filter?: ?array<ContactsListPartnersRequestFilterItem>,
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
