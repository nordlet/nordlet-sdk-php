<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsTrialBalanceResponse extends JsonSerializableType
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
     * @var array<PostV1ReportsTrialBalanceResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsTrialBalanceResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PostV1ReportsTrialBalanceResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PostV1ReportsTrialBalanceResponseTotals $totals;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   rows: array<PostV1ReportsTrialBalanceResponseRowsItem>,
     *   totals: PostV1ReportsTrialBalanceResponseTotals,
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
