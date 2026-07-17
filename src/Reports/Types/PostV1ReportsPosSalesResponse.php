<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsPosSalesResponse extends JsonSerializableType
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
     * @var array<PostV1ReportsPosSalesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsPosSalesResponseRowsItem::class])]
    public array $rows;

    /**
     * @var array<PostV1ReportsPosSalesResponseByRateItem> $byRate
     */
    #[JsonProperty('byRate'), ArrayType([PostV1ReportsPosSalesResponseByRateItem::class])]
    public array $byRate;

    /**
     * @var PostV1ReportsPosSalesResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PostV1ReportsPosSalesResponseTotals $totals;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   rows: array<PostV1ReportsPosSalesResponseRowsItem>,
     *   byRate: array<PostV1ReportsPosSalesResponseByRateItem>,
     *   totals: PostV1ReportsPosSalesResponseTotals,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->rows = $values['rows'];
        $this->byRate = $values['byRate'];
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
