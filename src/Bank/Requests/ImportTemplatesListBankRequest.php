<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\ImportTemplatesListBankRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Bank\Types\ImportTemplatesListBankRequestFilterItem;

class ImportTemplatesListBankRequest extends JsonSerializableType
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
     * @var ?array<ImportTemplatesListBankRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([ImportTemplatesListBankRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<ImportTemplatesListBankRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([ImportTemplatesListBankRequestFilterItem::class])]
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
     *   sort?: ?array<ImportTemplatesListBankRequestSortItem>,
     *   filter?: ?array<ImportTemplatesListBankRequestFilterItem>,
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
