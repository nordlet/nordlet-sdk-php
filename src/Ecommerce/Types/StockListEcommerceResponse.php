<?php

namespace Nordlet\Ecommerce\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class StockListEcommerceResponse extends JsonSerializableType
{
    /**
     * @var array<StockListEcommerceResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([StockListEcommerceResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<StockListEcommerceResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
