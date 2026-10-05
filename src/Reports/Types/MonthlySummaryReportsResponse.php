<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class MonthlySummaryReportsResponse extends JsonSerializableType
{
    /**
     * @var array<MonthlySummaryReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([MonthlySummaryReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<MonthlySummaryReportsResponseRowsItem>,
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
