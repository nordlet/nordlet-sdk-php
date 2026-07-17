<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1HrLeaveBalancesListRequest extends JsonSerializableType
{
    /**
     * @var ?string $employeeId
     */
    #[JsonProperty('employeeId')]
    public ?string $employeeId;

    /**
     * @var ?int $year
     */
    #[JsonProperty('year')]
    public ?int $year;

    /**
     * @param array{
     *   employeeId?: ?string,
     *   year?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->employeeId = $values['employeeId'] ?? null;
        $this->year = $values['year'] ?? null;
    }
}
