<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class RecognitionSummarySalesResponse extends JsonSerializableType
{
    /**
     * @var array<RecognitionSummarySalesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([RecognitionSummarySalesResponseRowsItem::class])]
    public array $rows;

    /**
     * @var RecognitionSummarySalesResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public RecognitionSummarySalesResponseTotals $totals;

    /**
     * @param array{
     *   rows: array<RecognitionSummarySalesResponseRowsItem>,
     *   totals: RecognitionSummarySalesResponseTotals,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
