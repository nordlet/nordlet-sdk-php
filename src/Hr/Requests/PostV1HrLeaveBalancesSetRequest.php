<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1HrLeaveBalancesSetRequest extends JsonSerializableType
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
     * @var ?string $usedDays
     */
    #[JsonProperty('usedDays')]
    public ?string $usedDays;

    /**
     * @param array{
     *   employeeId: string,
     *   year: int,
     *   entitledDays: string,
     *   usedDays?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->year = $values['year'];
        $this->entitledDays = $values['entitledDays'];
        $this->usedDays = $values['usedDays'] ?? null;
    }
}
