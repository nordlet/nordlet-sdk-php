<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesRecognitionSummaryResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1SalesRecognitionSummaryResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1SalesRecognitionSummaryResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PostV1SalesRecognitionSummaryResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PostV1SalesRecognitionSummaryResponseTotals $totals;

    /**
     * @param array{
     *   rows: array<PostV1SalesRecognitionSummaryResponseRowsItem>,
     *   totals: PostV1SalesRecognitionSummaryResponseTotals,
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
