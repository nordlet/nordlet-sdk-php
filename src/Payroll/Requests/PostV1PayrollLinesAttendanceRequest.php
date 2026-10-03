<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PayrollLinesAttendanceRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $daysWorked
     */
    #[JsonProperty('daysWorked')]
    public ?string $daysWorked;

    /**
     * @var ?string $hoursWorked
     */
    #[JsonProperty('hoursWorked')]
    public ?string $hoursWorked;

    /**
     * @var ?string $registeredDays
     */
    #[JsonProperty('registeredDays')]
    public ?string $registeredDays;

    /**
     * @var ?string $averageHourlyEarnings
     */
    #[JsonProperty('averageHourlyEarnings')]
    public ?string $averageHourlyEarnings;

    /**
     * @param array{
     *   id: string,
     *   daysWorked?: ?string,
     *   hoursWorked?: ?string,
     *   registeredDays?: ?string,
     *   averageHourlyEarnings?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->daysWorked = $values['daysWorked'] ?? null;
        $this->hoursWorked = $values['hoursWorked'] ?? null;
        $this->registeredDays = $values['registeredDays'] ?? null;
        $this->averageHourlyEarnings = $values['averageHourlyEarnings'] ?? null;
    }
}
