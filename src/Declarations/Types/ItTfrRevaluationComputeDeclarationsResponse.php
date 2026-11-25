<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ItTfrRevaluationComputeDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $rate
     */
    #[JsonProperty('rate')]
    public string $rate;

    /**
     * @var array<ItTfrRevaluationComputeDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ItTfrRevaluationComputeDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var ItTfrRevaluationComputeDeclarationsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public ItTfrRevaluationComputeDeclarationsResponseTotals $totals;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   year: int,
     *   date: DateTime,
     *   rate: string,
     *   rows: array<ItTfrRevaluationComputeDeclarationsResponseRowsItem>,
     *   totals: ItTfrRevaluationComputeDeclarationsResponseTotals,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->date = $values['date'];
        $this->rate = $values['rate'];
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
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
