<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class TrialBalanceReportsResponse extends JsonSerializableType
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
     * @var array<TrialBalanceReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([TrialBalanceReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var TrialBalanceReportsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public TrialBalanceReportsResponseTotals $totals;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   rows: array<TrialBalanceReportsResponseRowsItem>,
     *   totals: TrialBalanceReportsResponseTotals,
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
