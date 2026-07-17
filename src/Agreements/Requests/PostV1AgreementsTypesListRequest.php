<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\PostV1AgreementsTypesListRequestSortItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Agreements\Types\PostV1AgreementsTypesListRequestFilterItem;

class PostV1AgreementsTypesListRequest extends JsonSerializableType
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
     * @var ?array<PostV1AgreementsTypesListRequestSortItem> $sort
     */
    #[JsonProperty('sort'), ArrayType([PostV1AgreementsTypesListRequestSortItem::class])]
    public ?array $sort;

    /**
     * @var ?array<PostV1AgreementsTypesListRequestFilterItem> $filter
     */
    #[JsonProperty('filter'), ArrayType([PostV1AgreementsTypesListRequestFilterItem::class])]
    public ?array $filter;

    /**
     * @param array{
     *   page?: ?int,
     *   pageSize?: ?int,
     *   sort?: ?array<PostV1AgreementsTypesListRequestSortItem>,
     *   filter?: ?array<PostV1AgreementsTypesListRequestFilterItem>,
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
