<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\SubmissionsListDeclarationsRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Declarations\Types\SubmissionsListDeclarationsRequestFilterItem;

class SubmissionsListDeclarationsRequest extends JsonSerializableType
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
     * @var ?array<SubmissionsListDeclarationsRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([SubmissionsListDeclarationsRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<SubmissionsListDeclarationsRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([SubmissionsListDeclarationsRequestFilterItem::class])]
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
     *   sort?: ?array<SubmissionsListDeclarationsRequestSortItem>,
     *   filter?: ?array<SubmissionsListDeclarationsRequestFilterItem>,
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
