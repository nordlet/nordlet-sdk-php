<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1HrTimesheetsListResponseRowsItem extends JsonSerializableType
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
     * @var array<PostV1HrTimesheetsListResponseRowsItemDaysItem> $days
     */
    #[JsonProperty('days'), ArrayType([PostV1HrTimesheetsListResponseRowsItemDaysItem::class])]
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
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   employeeId: string,
     *   employeeName: string,
     *   year: int,
     *   month: int,
     *   days: array<PostV1HrTimesheetsListResponseRowsItemDaysItem>,
     *   workedDays: string,
     *   workedHours: string,
     *   updatedAt: string,
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
