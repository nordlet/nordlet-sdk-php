<?php

namespace Nordlet\Ecommerce\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ProductsListEcommerceResponse extends JsonSerializableType
{
    /**
     * @var int $total
     */
    #[JsonProperty('total')]
    public int $total;

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
     * @var array<ProductsListEcommerceResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ProductsListEcommerceResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   total: int,
     *   page: int,
     *   pageSize: int,
     *   rows: array<ProductsListEcommerceResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->total = $values['total'];
        $this->page = $values['page'];
        $this->pageSize = $values['pageSize'];
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
