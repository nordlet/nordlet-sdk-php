<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsWorkweeksListDeclarationsResponseEmployeesItemWeeksItem extends JsonSerializableType
{
    /**
     * @var string $start
     */
    #[JsonProperty('start')]
    public string $start;

    /**
     * @var string $end
     */
    #[JsonProperty('end')]
    public string $end;

    /**
     * @var string $hours
     */
    #[JsonProperty('hours')]
    public string $hours;

    /**
     * @var string $overtimeHours
     */
    #[JsonProperty('overtimeHours')]
    public string $overtimeHours;

    /**
     * @var array<UsWorkweeksListDeclarationsResponseEmployeesItemWeeksItemDaysItem> $days
     */
    #[JsonProperty('days'), ArrayType([UsWorkweeksListDeclarationsResponseEmployeesItemWeeksItemDaysItem::class])]
    public array $days;

    /**
     * @param array{
     *   start: string,
     *   end: string,
     *   hours: string,
     *   overtimeHours: string,
     *   days: array<UsWorkweeksListDeclarationsResponseEmployeesItemWeeksItemDaysItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->start = $values['start'];
        $this->end = $values['end'];
        $this->hours = $values['hours'];
        $this->overtimeHours = $values['overtimeHours'];
        $this->days = $values['days'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
