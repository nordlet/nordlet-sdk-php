<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweeksItem extends JsonSerializableType
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
     * @var array<UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweeksItemDaysItem> $days
     */
    #[JsonProperty('days'), ArrayType([UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweeksItemDaysItem::class])]
    public array $days;

    /**
     * @var ?string $regularRate
     */
    #[JsonProperty('regularRate')]
    public ?string $regularRate;

    /**
     * @var ?string $straightTimeEarnings
     */
    #[JsonProperty('straightTimeEarnings')]
    public ?string $straightTimeEarnings;

    /**
     * @param array{
     *   start: string,
     *   end: string,
     *   hours: string,
     *   overtimeHours: string,
     *   days: array<UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweeksItemDaysItem>,
     *   regularRate?: ?string,
     *   straightTimeEarnings?: ?string,
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
        $this->regularRate = $values['regularRate'] ?? null;
        $this->straightTimeEarnings = $values['straightTimeEarnings'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
