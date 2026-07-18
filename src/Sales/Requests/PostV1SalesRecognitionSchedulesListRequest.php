<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\PostV1SalesRecognitionSchedulesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Sales\Types\PostV1SalesRecognitionSchedulesListRequestFilterItem;

class PostV1SalesRecognitionSchedulesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1SalesRecognitionSchedulesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1SalesRecognitionSchedulesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1SalesRecognitionSchedulesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1SalesRecognitionSchedulesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1SalesRecognitionSchedulesListRequestSortItem>,
     *   filter?: ?array<PostV1SalesRecognitionSchedulesListRequestFilterItem>,
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
