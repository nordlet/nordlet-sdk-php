<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class IeCt1GenerateDeclarationsResponseCriteria extends JsonSerializableType
{
    /**
     * @var string $balanceSheetTotal
     */
    #[JsonProperty('balanceSheetTotal')]
    public string $balanceSheetTotal;

    /**
     * @var string $turnover
     */
    #[JsonProperty('turnover')]
    public string $turnover;

    /**
     * @var float $averageEmployees
     */
    #[JsonProperty('averageEmployees')]
    public float $averageEmployees;

    /**
     * @param array{
     *   balanceSheetTotal: string,
     *   turnover: string,
     *   averageEmployees: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->balanceSheetTotal = $values['balanceSheetTotal'];
        $this->turnover = $values['turnover'];
        $this->averageEmployees = $values['averageEmployees'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
