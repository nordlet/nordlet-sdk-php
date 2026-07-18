<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\PostV1SalesRecognitionRunsListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Sales\Types\PostV1SalesRecognitionRunsListRequestFilterItem;

class PostV1SalesRecognitionRunsListRequest extends JsonSerializableType
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
     * @var ?array<PostV1SalesRecognitionRunsListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1SalesRecognitionRunsListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1SalesRecognitionRunsListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1SalesRecognitionRunsListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1SalesRecognitionRunsListRequestSortItem>,
     *   filter?: ?array<PostV1SalesRecognitionRunsListRequestFilterItem>,
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
