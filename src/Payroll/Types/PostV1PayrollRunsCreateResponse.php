<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1PayrollRunsCreateResponse extends JsonSerializableType
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
     * @var value-of<PostV1PayrollRunsCreateResponseStatus> $status
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
     * @var array<PostV1PayrollRunsCreateResponseComponentTotalsItem> $componentTotals
     */
    #[JsonProperty('componentTotals'), ArrayType([PostV1PayrollRunsCreateResponseComponentTotalsItem::class])]
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
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $approvedAt
     */
    #[JsonProperty('approvedAt')]
    public ?string $approvedAt;

    /**
     * @var array<PostV1PayrollRunsCreateResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1PayrollRunsCreateResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   year: int,
     *   month: int,
     *   countryCode: string,
     *   status: value-of<PostV1PayrollRunsCreateResponseStatus>,
     *   grossTotal: string,
     *   taxAllowanceTotal: string,
     *   incomeTaxTotal: string,
     *   employeeContributionsTotal: string,
     *   employerContributionsTotal: string,
     *   componentTotals: array<PostV1PayrollRunsCreateResponseComponentTotalsItem>,
     *   netTotal: string,
     *   createdAt: string,
     *   lines: array<PostV1PayrollRunsCreateResponseLinesItem>,
     *   journalTransactionId?: ?string,
     *   notes?: ?string,
     *   approvedAt?: ?string,
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
