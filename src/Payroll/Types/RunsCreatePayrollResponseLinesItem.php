<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class RunsCreatePayrollResponseLinesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var ?string $contractId
     */
    #[JsonProperty('contractId')]
    public ?string $contractId;

    /**
     * @var string $employeeName
     */
    #[JsonProperty('employeeName')]
    public string $employeeName;

    /**
     * @var string $gross
     */
    #[JsonProperty('gross')]
    public string $gross;

    /**
     * @var string $natura
     */
    #[JsonProperty('natura')]
    public string $natura;

    /**
     * @var array<RunsCreatePayrollResponseLinesItemAdditionsItem> $additions
     */
    #[JsonProperty('additions'), ArrayType([RunsCreatePayrollResponseLinesItemAdditionsItem::class])]
    public array $additions;

    /**
     * @var array<RunsCreatePayrollResponseLinesItemDeductionsItem> $deductions
     */
    #[JsonProperty('deductions'), ArrayType([RunsCreatePayrollResponseLinesItemDeductionsItem::class])]
    public array $deductions;

    /**
     * @var string $taxableBase
     */
    #[JsonProperty('taxableBase')]
    public string $taxableBase;

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
     * @var array<RunsCreatePayrollResponseLinesItemComponentsItem> $components
     */
    #[JsonProperty('components'), ArrayType([RunsCreatePayrollResponseLinesItemComponentsItem::class])]
    public array $components;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @var ?string $daysWorked
     */
    #[JsonProperty('daysWorked')]
    public ?string $daysWorked;

    /**
     * @var ?string $hoursWorked
     */
    #[JsonProperty('hoursWorked')]
    public ?string $hoursWorked;

    /**
     * @var ?string $registeredDays
     */
    #[JsonProperty('registeredDays')]
    public ?string $registeredDays;

    /**
     * @var ?string $averageHourlyEarnings
     */
    #[JsonProperty('averageHourlyEarnings')]
    public ?string $averageHourlyEarnings;

    /**
     * @param array{
     *   id: string,
     *   employeeId: string,
     *   employeeName: string,
     *   gross: string,
     *   natura: string,
     *   additions: array<RunsCreatePayrollResponseLinesItemAdditionsItem>,
     *   deductions: array<RunsCreatePayrollResponseLinesItemDeductionsItem>,
     *   taxableBase: string,
     *   taxAllowance: string,
     *   incomeTax: string,
     *   employeeContributions: string,
     *   employerContributions: string,
     *   components: array<RunsCreatePayrollResponseLinesItemComponentsItem>,
     *   net: string,
     *   contractId?: ?string,
     *   daysWorked?: ?string,
     *   hoursWorked?: ?string,
     *   registeredDays?: ?string,
     *   averageHourlyEarnings?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->employeeId = $values['employeeId'];
        $this->contractId = $values['contractId'] ?? null;
        $this->employeeName = $values['employeeName'];
        $this->gross = $values['gross'];
        $this->natura = $values['natura'];
        $this->additions = $values['additions'];
        $this->deductions = $values['deductions'];
        $this->taxableBase = $values['taxableBase'];
        $this->taxAllowance = $values['taxAllowance'];
        $this->incomeTax = $values['incomeTax'];
        $this->employeeContributions = $values['employeeContributions'];
        $this->employerContributions = $values['employerContributions'];
        $this->components = $values['components'];
        $this->net = $values['net'];
        $this->daysWorked = $values['daysWorked'] ?? null;
        $this->hoursWorked = $values['hoursWorked'] ?? null;
        $this->registeredDays = $values['registeredDays'] ?? null;
        $this->averageHourlyEarnings = $values['averageHourlyEarnings'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
