<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LtPln204ComputeDeclarationsResponseCriteria extends JsonSerializableType
{
    /**
     * @var string $netTurnover
     */
    #[JsonProperty('netTurnover')]
    public string $netTurnover;

    /**
     * @var float $avgEmployees
     */
    #[JsonProperty('avgEmployees')]
    public float $avgEmployees;

    /**
     * @param array{
     *   netTurnover: string,
     *   avgEmployees: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
