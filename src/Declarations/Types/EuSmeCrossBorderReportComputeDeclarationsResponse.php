<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class EuSmeCrossBorderReportComputeDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $quarter
     */
    #[JsonProperty('quarter')]
    public int $quarter;

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
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var array<EuSmeCrossBorderReportComputeDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([EuSmeCrossBorderReportComputeDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   year: int,
     *   quarter: int,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   currency: string,
     *   rows: array<EuSmeCrossBorderReportComputeDeclarationsResponseRowsItem>,
     *   total: string,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->quarter = $values['quarter'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->currency = $values['currency'];
        $this->rows = $values['rows'];
        $this->total = $values['total'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
