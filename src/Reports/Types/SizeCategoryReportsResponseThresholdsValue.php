<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SizeCategoryReportsResponseThresholdsValue extends JsonSerializableType
{
    /**
     * @var float $totalAssets
     */
    #[JsonProperty('totalAssets')]
    public float $totalAssets;

    /**
     * @var float $netTurnover
     */
    #[JsonProperty('netTurnover')]
    public float $netTurnover;

    /**
     * @var float $employees
     */
    #[JsonProperty('employees')]
    public float $employees;

    /**
     * @param array{
     *   totalAssets: float,
     *   netTurnover: float,
     *   employees: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->totalAssets = $values['totalAssets'];
        $this->netTurnover = $values['netTurnover'];
        $this->employees = $values['employees'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
