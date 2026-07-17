<?php

namespace Nordlet\Ecommerce\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1EcommerceOrdersListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1EcommerceOrdersListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1EcommerceOrdersListResponseRowsItem::class])]
    public array $rows;

    /**
     * @var int $page
     */
    #[JsonProperty('page')]
    public int $page;

    /**
     * @var int $pageSize
     */
    #[JsonProperty('pageSize')]
    public int $pageSize;

    /**
     * @var int $total
     */
    #[JsonProperty('total')]
    public int $total;

    /**
     * @param array{
     *   rows: array<PostV1EcommerceOrdersListResponseRowsItem>,
     *   page: int,
     *   pageSize: int,
     *   total: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
        $this->page = $values['page'];
        $this->pageSize = $values['pageSize'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
