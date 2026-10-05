<?php

namespace Nordlet\Capture\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Capture\Types\DocumentsListCaptureRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Capture\Types\DocumentsListCaptureRequestFilterItem;

class DocumentsListCaptureRequest extends JsonSerializableType
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
     * @var ?array<DocumentsListCaptureRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([DocumentsListCaptureRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<DocumentsListCaptureRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([DocumentsListCaptureRequestFilterItem::class])]
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
     *   sort?: ?array<DocumentsListCaptureRequestSortItem>,
     *   filter?: ?array<DocumentsListCaptureRequestFilterItem>,
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
