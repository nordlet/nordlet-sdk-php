<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ItTfrRevaluationPostDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var array<ItTfrRevaluationPostDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ItTfrRevaluationPostDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var ItTfrRevaluationPostDeclarationsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public ItTfrRevaluationPostDeclarationsResponseTotals $totals;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   id: string,
     *   year: int,
     *   date: DateTime,
     *   rate: string,
     *   rows: array<ItTfrRevaluationPostDeclarationsResponseRowsItem>,
     *   totals: ItTfrRevaluationPostDeclarationsResponseTotals,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
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
