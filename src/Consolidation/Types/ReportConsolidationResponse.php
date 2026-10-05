<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ReportConsolidationResponse extends JsonSerializableType
{
    /**
     * @var string $presentationCurrency
     */
    #[JsonProperty('presentationCurrency')]
    public string $presentationCurrency;

    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var value-of<ReportConsolidationResponseCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var ReportConsolidationResponseStatements $statements
     */
    #[JsonProperty('statements')]
    public ReportConsolidationResponseStatements $statements;

    /**
     * @var array<ReportConsolidationResponseTrialBalanceItem> $trialBalance
     */
    #[JsonProperty('trialBalance'), ArrayType([ReportConsolidationResponseTrialBalanceItem::class])]
    public array $trialBalance;

    /**
     * @var ReportConsolidationResponseNonControllingInterest $nonControllingInterest
     */
    #[JsonProperty('nonControllingInterest')]
    public ReportConsolidationResponseNonControllingInterest $nonControllingInterest;

    /**
     * @var ReportConsolidationResponseEquityMethod $equityMethod
     */
    #[JsonProperty('equityMethod')]
    public ReportConsolidationResponseEquityMethod $equityMethod;

    /**
     * @var array<ReportConsolidationResponseMembersItem> $members
     */
    #[JsonProperty('members'), ArrayType([ReportConsolidationResponseMembersItem::class])]
    public array $members;

    /**
     * @var ReportConsolidationResponseEliminations $eliminations
     */
    #[JsonProperty('eliminations')]
    public ReportConsolidationResponseEliminations $eliminations;

    /**
     * @var ReportConsolidationResponseCashFlow $cashFlow
     */
    #[JsonProperty('cashFlow')]
    public ReportConsolidationResponseCashFlow $cashFlow;

    /**
     * @var array<ReportConsolidationResponseIntercompanyCandidatesItem> $intercompanyCandidates
     */
    #[JsonProperty('intercompanyCandidates'), ArrayType([ReportConsolidationResponseIntercompanyCandidatesItem::class])]
    public array $intercompanyCandidates;

    /**
     * @param array{
     *   presentationCurrency: string,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   category: value-of<ReportConsolidationResponseCategory>,
     *   statements: ReportConsolidationResponseStatements,
     *   trialBalance: array<ReportConsolidationResponseTrialBalanceItem>,
     *   nonControllingInterest: ReportConsolidationResponseNonControllingInterest,
     *   equityMethod: ReportConsolidationResponseEquityMethod,
     *   members: array<ReportConsolidationResponseMembersItem>,
     *   eliminations: ReportConsolidationResponseEliminations,
     *   cashFlow: ReportConsolidationResponseCashFlow,
     *   intercompanyCandidates: array<ReportConsolidationResponseIntercompanyCandidatesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->presentationCurrency = $values['presentationCurrency'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->category = $values['category'];
        $this->statements = $values['statements'];
        $this->trialBalance = $values['trialBalance'];
        $this->nonControllingInterest = $values['nonControllingInterest'];
        $this->equityMethod = $values['equityMethod'];
        $this->members = $values['members'];
        $this->eliminations = $values['eliminations'];
        $this->cashFlow = $values['cashFlow'];
        $this->intercompanyCandidates = $values['intercompanyCandidates'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
