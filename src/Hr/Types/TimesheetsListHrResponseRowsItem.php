<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class TimesheetsListHrResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $employeeName
     */
    #[JsonProperty('employeeName')]
    public string $employeeName;

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
     * @var array<TimesheetsListHrResponseRowsItemDaysItem> $days
     */
    #[JsonProperty('days'), ArrayType([TimesheetsListHrResponseRowsItemDaysItem::class])]
    public array $days;

    /**
     * @var string $workedDays
     */
    #[JsonProperty('workedDays')]
    public string $workedDays;

    /**
     * @var string $workedHours
     */
    #[JsonProperty('workedHours')]
    public string $workedHours;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   employeeId: string,
     *   employeeName: string,
     *   year: int,
     *   month: int,
     *   days: array<TimesheetsListHrResponseRowsItemDaysItem>,
     *   workedDays: string,
     *   workedHours: string,
     *   updatedAt: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->employeeId = $values['employeeId'];
        $this->employeeName = $values['employeeName'];
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->days = $values['days'];
        $this->workedDays = $values['workedDays'];
        $this->workedHours = $values['workedHours'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
