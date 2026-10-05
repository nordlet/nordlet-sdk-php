<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reference\Types\CnCodesListReferenceRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Reference\Types\CnCodesListReferenceRequestFilterItem;

class CnCodesListReferenceRequest extends JsonSerializableType
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
     * @var ?array<CnCodesListReferenceRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([CnCodesListReferenceRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<CnCodesListReferenceRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([CnCodesListReferenceRequestFilterItem::class])]
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
     *   sort?: ?array<CnCodesListReferenceRequestSortItem>,
     *   filter?: ?array<CnCodesListReferenceRequestFilterItem>,
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
