<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class StockShortageReportsResponse extends JsonSerializableType
{
    /**
     * @var array<StockShortageReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([StockShortageReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<StockShortageReportsResponseRowsItem>,
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
