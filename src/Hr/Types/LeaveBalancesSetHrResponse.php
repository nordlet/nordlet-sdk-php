<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LeaveBalancesSetHrResponse extends JsonSerializableType
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
     * @var string $entitledDays
     */
    #[JsonProperty('entitledDays')]
    public string $entitledDays;

    /**
     * @var string $usedDays
     */
    #[JsonProperty('usedDays')]
    public string $usedDays;

    /**
     * @var string $remainingDays
     */
    #[JsonProperty('remainingDays')]
    public string $remainingDays;

    /**
     * @param array{
     *   employeeId: string,
     *   year: int,
     *   entitledDays: string,
     *   usedDays: string,
     *   remainingDays: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->year = $values['year'];
        $this->entitledDays = $values['entitledDays'];
        $this->usedDays = $values['usedDays'];
        $this->remainingDays = $values['remainingDays'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
