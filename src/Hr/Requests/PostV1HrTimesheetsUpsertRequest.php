<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PostV1HrTimesheetsUpsertRequestDaysItem;
use Nordlet\Core\Types\ArrayType;

class PostV1HrTimesheetsUpsertRequest extends JsonSerializableType
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
     * @var array<PostV1HrTimesheetsUpsertRequestDaysItem> $days
     */
    #[JsonProperty('days'), ArrayType([PostV1HrTimesheetsUpsertRequestDaysItem::class])]
    public array $days;

    /**
     * @param array{
     *   employeeId: string,
     *   year: int,
     *   month: int,
     *   days: array<PostV1HrTimesheetsUpsertRequestDaysItem>,
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
