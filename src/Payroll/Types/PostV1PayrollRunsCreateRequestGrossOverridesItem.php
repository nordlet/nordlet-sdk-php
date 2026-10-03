<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PayrollRunsCreateRequestGrossOverridesItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $gross
     */
    #[JsonProperty('gross')]
    public string $gross;

    /**
     * @param array{
     *   employeeId: string,
     *   gross: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->gross = $values['gross'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
