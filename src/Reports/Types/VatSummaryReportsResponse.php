<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class VatSummaryReportsResponse extends JsonSerializableType
{
    /**
     * @var string $side
     */
    #[JsonProperty('side')]
    public string $side;

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
     * @var array<VatSummaryReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([VatSummaryReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var VatSummaryReportsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public VatSummaryReportsResponseTotals $totals;

    /**
     * @param array{
     *   side: string,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   rows: array<VatSummaryReportsResponseRowsItem>,
     *   totals: VatSummaryReportsResponseTotals,
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
