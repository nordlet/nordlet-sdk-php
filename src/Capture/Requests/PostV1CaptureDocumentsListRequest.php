<?php

namespace Nordlet\Capture\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Capture\Types\PostV1CaptureDocumentsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Capture\Types\PostV1CaptureDocumentsListRequestFilterItem;

class PostV1CaptureDocumentsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1CaptureDocumentsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1CaptureDocumentsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1CaptureDocumentsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1CaptureDocumentsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1CaptureDocumentsListRequestSortItem>,
     *   filter?: ?array<PostV1CaptureDocumentsListRequestFilterItem>,
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
