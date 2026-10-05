<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class RunsCreatePayrollResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var value-of<RunsCreatePayrollResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var string $taxAllowanceTotal
     */
    #[JsonProperty('taxAllowanceTotal')]
    public string $taxAllowanceTotal;

    /**
     * @var string $incomeTaxTotal
     */
    #[JsonProperty('incomeTaxTotal')]
    public string $incomeTaxTotal;

    /**
     * @var string $employeeContributionsTotal
     */
    #[JsonProperty('employeeContributionsTotal')]
    public string $employeeContributionsTotal;

    /**
     * @var string $employerContributionsTotal
     */
    #[JsonProperty('employerContributionsTotal')]
    public string $employerContributionsTotal;

    /**
     * @var array<RunsCreatePayrollResponseComponentTotalsItem> $componentTotals
     */
    #[JsonProperty('componentTotals'), ArrayType([RunsCreatePayrollResponseComponentTotalsItem::class])]
    public array $componentTotals;

    /**
     * @var string $netTotal
     */
    #[JsonProperty('netTotal')]
    public string $netTotal;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var ?DateTime $approvedAt
     */
    #[JsonProperty('approvedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $approvedAt;

    /**
     * @var array<RunsCreatePayrollResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([RunsCreatePayrollResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   year: int,
     *   month: int,
     *   countryCode: string,
     *   status: value-of<RunsCreatePayrollResponseStatus>,
     *   grossTotal: string,
     *   taxAllowanceTotal: string,
     *   incomeTaxTotal: string,
     *   employeeContributionsTotal: string,
     *   employerContributionsTotal: string,
     *   componentTotals: array<RunsCreatePayrollResponseComponentTotalsItem>,
     *   netTotal: string,
     *   warnings: array<string>,
     *   createdAt: DateTime,
     *   lines: array<RunsCreatePayrollResponseLinesItem>,
     *   journalTransactionId?: ?string,
     *   notes?: ?string,
     *   approvedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->countryCode = $values['countryCode'];
        $this->status = $values['status'];
        $this->grossTotal = $values['grossTotal'];
        $this->taxAllowanceTotal = $values['taxAllowanceTotal'];
        $this->incomeTaxTotal = $values['incomeTaxTotal'];
        $this->employeeContributionsTotal = $values['employeeContributionsTotal'];
        $this->employerContributionsTotal = $values['employerContributionsTotal'];
        $this->componentTotals = $values['componentTotals'];
        $this->netTotal = $values['netTotal'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->warnings = $values['warnings'];
        $this->createdAt = $values['createdAt'];
        $this->approvedAt = $values['approvedAt'] ?? null;
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
