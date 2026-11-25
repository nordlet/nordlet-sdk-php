<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ItTfrAccrualPostDeclarationsResponse extends JsonSerializableType
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
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var array<ItTfrAccrualPostDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ItTfrAccrualPostDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var ItTfrAccrualPostDeclarationsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public ItTfrAccrualPostDeclarationsResponseTotals $totals;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   id: string,
     *   year: int,
     *   month: int,
     *   date: DateTime,
     *   rows: array<ItTfrAccrualPostDeclarationsResponseRowsItem>,
     *   totals: ItTfrAccrualPostDeclarationsResponseTotals,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->date = $values['date'];
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
