<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class StockAgingReportsResponse extends JsonSerializableType
{
    /**
     * @var string $asOf
     */
    #[JsonProperty('asOf')]
    public string $asOf;

    /**
     * @var array<StockAgingReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([StockAgingReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var string $totalValue
     */
    #[JsonProperty('totalValue')]
    public string $totalValue;

    /**
     * @param array{
     *   asOf: string,
     *   rows: array<StockAgingReportsResponseRowsItem>,
     *   totalValue: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->asOf = $values['asOf'];
        $this->rows = $values['rows'];
        $this->totalValue = $values['totalValue'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
