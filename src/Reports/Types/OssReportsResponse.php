<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class OssReportsResponse extends JsonSerializableType
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
     * @var array<OssReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([OssReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var OssReportsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public OssReportsResponseTotals $totals;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   rows: array<OssReportsResponseRowsItem>,
     *   totals: OssReportsResponseTotals,
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
