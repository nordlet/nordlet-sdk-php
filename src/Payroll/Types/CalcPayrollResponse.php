<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CalcPayrollResponse extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $taxAllowance
     */
    #[JsonProperty('taxAllowance')]
    public string $taxAllowance;

    /**
     * @var string $incomeTax
     */
    #[JsonProperty('incomeTax')]
    public string $incomeTax;

    /**
     * @var string $employeeContributions
     */
    #[JsonProperty('employeeContributions')]
    public string $employeeContributions;

    /**
     * @var string $employerContributions
     */
    #[JsonProperty('employerContributions')]
    public string $employerContributions;

    /**
     * @var array<CalcPayrollResponseComponentsItem> $components
     */
    #[JsonProperty('components'), ArrayType([CalcPayrollResponseComponentsItem::class])]
    public array $components;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @param array{
     *   countryCode: string,
     *   taxAllowance: string,
     *   incomeTax: string,
     *   employeeContributions: string,
     *   employerContributions: string,
     *   components: array<CalcPayrollResponseComponentsItem>,
     *   net: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->taxAllowance = $values['taxAllowance'];
        $this->incomeTax = $values['incomeTax'];
        $this->employeeContributions = $values['employeeContributions'];
        $this->employerContributions = $values['employerContributions'];
        $this->components = $values['components'];
        $this->net = $values['net'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
