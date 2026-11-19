<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsDeUnemploymentGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var float $year
     */
    #[JsonProperty('year')]
    public float $year;

    /**
     * @var float $quarter
     */
    #[JsonProperty('quarter')]
    public float $quarter;

    /**
     * @var string $totalWages
     */
    #[JsonProperty('totalWages')]
    public string $totalWages;

    /**
     * @var string $excessWages
     */
    #[JsonProperty('excessWages')]
    public string $excessWages;

    /**
     * @var string $taxableWages
     */
    #[JsonProperty('taxableWages')]
    public string $taxableWages;

    /**
     * @var string $contributions
     */
    #[JsonProperty('contributions')]
    public string $contributions;

    /**
     * @var array<UsDeUnemploymentGetDeclarationsResponseEmployeesItem> $employees
     */
    #[JsonProperty('employees'), ArrayType([UsDeUnemploymentGetDeclarationsResponseEmployeesItem::class])]
    public array $employees;

    /**
     * @param array{
     *   year: float,
     *   quarter: float,
     *   totalWages: string,
     *   excessWages: string,
     *   taxableWages: string,
     *   contributions: string,
     *   employees: array<UsDeUnemploymentGetDeclarationsResponseEmployeesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->quarter = $values['quarter'];
        $this->totalWages = $values['totalWages'];
        $this->excessWages = $values['excessWages'];
        $this->taxableWages = $values['taxableWages'];
        $this->contributions = $values['contributions'];
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
