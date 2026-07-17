<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsSizeCategoryResponseCriteria extends JsonSerializableType
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
     * @var int $avgEmployees
     */
    #[JsonProperty('avgEmployees')]
    public int $avgEmployees;

    /**
     * @param array{
     *   totalAssets: float,
     *   netTurnover: float,
     *   avgEmployees: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->totalAssets = $values['totalAssets'];
        $this->netTurnover = $values['netTurnover'];
        $this->avgEmployees = $values['avgEmployees'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
