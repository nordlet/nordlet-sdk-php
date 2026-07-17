<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ConsolidationReportResponse extends JsonSerializableType
{
    /**
     * @var string $presentationCurrency
     */
    #[JsonProperty('presentationCurrency')]
    public string $presentationCurrency;

    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var value-of<PostV1ConsolidationReportResponseCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var PostV1ConsolidationReportResponseStatements $statements
     */
    #[JsonProperty('statements')]
    public PostV1ConsolidationReportResponseStatements $statements;

    /**
     * @var array<PostV1ConsolidationReportResponseTrialBalanceItem> $trialBalance
     */
    #[JsonProperty('trialBalance'), ArrayType([PostV1ConsolidationReportResponseTrialBalanceItem::class])]
    public array $trialBalance;

    /**
     * @var PostV1ConsolidationReportResponseNonControllingInterest $nonControllingInterest
     */
    #[JsonProperty('nonControllingInterest')]
    public PostV1ConsolidationReportResponseNonControllingInterest $nonControllingInterest;

    /**
     * @var PostV1ConsolidationReportResponseEquityMethod $equityMethod
     */
    #[JsonProperty('equityMethod')]
    public PostV1ConsolidationReportResponseEquityMethod $equityMethod;

    /**
     * @var array<PostV1ConsolidationReportResponseMembersItem> $members
     */
    #[JsonProperty('members'), ArrayType([PostV1ConsolidationReportResponseMembersItem::class])]
    public array $members;

    /**
     * @var PostV1ConsolidationReportResponseEliminations $eliminations
     */
    #[JsonProperty('eliminations')]
    public PostV1ConsolidationReportResponseEliminations $eliminations;

    /**
     * @var array<PostV1ConsolidationReportResponseIntercompanyCandidatesItem> $intercompanyCandidates
     */
    #[JsonProperty('intercompanyCandidates'), ArrayType([PostV1ConsolidationReportResponseIntercompanyCandidatesItem::class])]
    public array $intercompanyCandidates;

    /**
     * @param array{
     *   presentationCurrency: string,
     *   fromDate: string,
     *   toDate: string,
     *   category: value-of<PostV1ConsolidationReportResponseCategory>,
     *   statements: PostV1ConsolidationReportResponseStatements,
     *   trialBalance: array<PostV1ConsolidationReportResponseTrialBalanceItem>,
     *   nonControllingInterest: PostV1ConsolidationReportResponseNonControllingInterest,
     *   equityMethod: PostV1ConsolidationReportResponseEquityMethod,
     *   members: array<PostV1ConsolidationReportResponseMembersItem>,
     *   eliminations: PostV1ConsolidationReportResponseEliminations,
     *   intercompanyCandidates: array<PostV1ConsolidationReportResponseIntercompanyCandidatesItem>,
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
