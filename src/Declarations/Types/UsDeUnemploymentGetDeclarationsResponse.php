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
     * @var UsDeUnemploymentGetDeclarationsResponseUc8 $uc8
     */
    #[JsonProperty('uc8')]
    public UsDeUnemploymentGetDeclarationsResponseUc8 $uc8;

    /**
     * @var UsDeUnemploymentGetDeclarationsResponseUc8A $uc8A
     */
    #[JsonProperty('uc8a')]
    public UsDeUnemploymentGetDeclarationsResponseUc8A $uc8A;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   year: float,
     *   quarter: float,
     *   totalWages: string,
     *   excessWages: string,
     *   taxableWages: string,
     *   contributions: string,
     *   employees: array<UsDeUnemploymentGetDeclarationsResponseEmployeesItem>,
     *   uc8: UsDeUnemploymentGetDeclarationsResponseUc8,
     *   uc8A: UsDeUnemploymentGetDeclarationsResponseUc8A,
     *   warnings: array<string>,
     *   source: string,
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
        $this->uc8 = $values['uc8'];
        $this->uc8A = $values['uc8A'];
        $this->warnings = $values['warnings'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
