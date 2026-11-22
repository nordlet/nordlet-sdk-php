<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class GbP45GetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var float $taxYear
     */
    #[JsonProperty('taxYear')]
    public float $taxYear;

    /**
     * @var string $completedOn
     */
    #[JsonProperty('completedOn')]
    public string $completedOn;

    /**
     * @var GbP45GetDeclarationsResponseEmployer $employer
     */
    #[JsonProperty('employer')]
    public GbP45GetDeclarationsResponseEmployer $employer;

    /**
     * @var GbP45GetDeclarationsResponseEmployee $employee
     */
    #[JsonProperty('employee')]
    public GbP45GetDeclarationsResponseEmployee $employee;

    /**
     * @var bool $studentLoanDeductionsToContinue
     */
    #[JsonProperty('studentLoanDeductionsToContinue')]
    public bool $studentLoanDeductionsToContinue;

    /**
     * @var string $taxCode
     */
    #[JsonProperty('taxCode')]
    public string $taxCode;

    /**
     * @var bool $week1Month1
     */
    #[JsonProperty('week1Month1')]
    public bool $week1Month1;

    /**
     * @var ?GbP45GetDeclarationsResponseLastEntries $lastEntries
     */
    #[JsonProperty('lastEntries')]
    public ?GbP45GetDeclarationsResponseLastEntries $lastEntries;

    /**
     * @var ?GbP45GetDeclarationsResponseThisEmployment $thisEmployment
     */
    #[JsonProperty('thisEmployment')]
    public ?GbP45GetDeclarationsResponseThisEmployment $thisEmployment;

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
     *   taxYear: float,
     *   completedOn: string,
     *   employer: GbP45GetDeclarationsResponseEmployer,
     *   employee: GbP45GetDeclarationsResponseEmployee,
     *   studentLoanDeductionsToContinue: bool,
     *   taxCode: string,
     *   week1Month1: bool,
     *   warnings: array<string>,
     *   source: string,
     *   lastEntries?: ?GbP45GetDeclarationsResponseLastEntries,
     *   thisEmployment?: ?GbP45GetDeclarationsResponseThisEmployment,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->taxYear = $values['taxYear'];
        $this->completedOn = $values['completedOn'];
        $this->employer = $values['employer'];
        $this->employee = $values['employee'];
        $this->studentLoanDeductionsToContinue = $values['studentLoanDeductionsToContinue'];
        $this->taxCode = $values['taxCode'];
        $this->week1Month1 = $values['week1Month1'];
        $this->lastEntries = $values['lastEntries'] ?? null;
        $this->thisEmployment = $values['thisEmployment'] ?? null;
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
