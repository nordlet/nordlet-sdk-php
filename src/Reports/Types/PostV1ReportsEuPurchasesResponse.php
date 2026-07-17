<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsEuPurchasesResponse extends JsonSerializableType
{
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
     * @var array<PostV1ReportsEuPurchasesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsEuPurchasesResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PostV1ReportsEuPurchasesResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PostV1ReportsEuPurchasesResponseTotals $totals;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   rows: array<PostV1ReportsEuPurchasesResponseRowsItem>,
     *   totals: PostV1ReportsEuPurchasesResponseTotals,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
