<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\TimesheetsUpsertHrRequestDaysItem;
use Nordlet\Core\Types\ArrayType;

class TimesheetsUpsertHrRequest extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

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
     * @var array<TimesheetsUpsertHrRequestDaysItem> $days
     */
    #[JsonProperty('days'), ArrayType([TimesheetsUpsertHrRequestDaysItem::class])]
    public array $days;

    /**
     * @param array{
     *   employeeId: string,
     *   year: int,
     *   month: int,
     *   days: array<TimesheetsUpsertHrRequestDaysItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->days = $values['days'];
    }
}
