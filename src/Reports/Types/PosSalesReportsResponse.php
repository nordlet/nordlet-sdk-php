<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class PosSalesReportsResponse extends JsonSerializableType
{
    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var array<PosSalesReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PosSalesReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var array<PosSalesReportsResponseByRateItem> $byRate
     */
    #[JsonProperty('byRate'), ArrayType([PosSalesReportsResponseByRateItem::class])]
    public array $byRate;

    /**
     * @var PosSalesReportsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PosSalesReportsResponseTotals $totals;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   rows: array<PosSalesReportsResponseRowsItem>,
     *   byRate: array<PosSalesReportsResponseByRateItem>,
     *   totals: PosSalesReportsResponseTotals,
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
