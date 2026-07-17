<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsVatSummaryResponse extends JsonSerializableType
{
    /**
     * @var string $side
     */
    #[JsonProperty('side')]
    public string $side;

    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var array<PostV1ReportsVatSummaryResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsVatSummaryResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PostV1ReportsVatSummaryResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PostV1ReportsVatSummaryResponseTotals $totals;

    /**
     * @param array{
     *   side: string,
     *   fromDate: string,
     *   toDate: string,
     *   rows: array<PostV1ReportsVatSummaryResponseRowsItem>,
     *   totals: PostV1ReportsVatSummaryResponseTotals,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->side = $values['side'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
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
