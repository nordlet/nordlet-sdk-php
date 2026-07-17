<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ConsolidationReportResponseStatements extends JsonSerializableType
{
    /**
     * @var value-of<PostV1ConsolidationReportResponseStatementsCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var string $layout
     */
    #[JsonProperty('layout')]
    public string $layout;

    /**
     * @var array<string> $requiredStatements
     */
    #[JsonProperty('requiredStatements'), ArrayType(['string'])]
    public array $requiredStatements;

    /**
     * @var string $asOf
     */
    #[JsonProperty('asOf')]
    public string $asOf;

    /**
     * @var PostV1ConsolidationReportResponseStatementsBalanceSheet $balanceSheet
     */
    #[JsonProperty('balanceSheet')]
    public PostV1ConsolidationReportResponseStatementsBalanceSheet $balanceSheet;

    /**
     * @var PostV1ConsolidationReportResponseStatementsProfitLoss $profitLoss
     */
    #[JsonProperty('profitLoss')]
    public PostV1ConsolidationReportResponseStatementsProfitLoss $profitLoss;

    /**
     * @var ?PostV1ConsolidationReportResponseStatementsBalanceSheetDetail $balanceSheetDetail
     */
    #[JsonProperty('balanceSheetDetail')]
    public ?PostV1ConsolidationReportResponseStatementsBalanceSheetDetail $balanceSheetDetail;

    /**
     * @var ?PostV1ConsolidationReportResponseStatementsProfitLossDetail $profitLossDetail
     */
    #[JsonProperty('profitLossDetail')]
    public ?PostV1ConsolidationReportResponseStatementsProfitLossDetail $profitLossDetail;

    /**
     * @param array{
     *   category: value-of<PostV1ConsolidationReportResponseStatementsCategory>,
     *   layout: string,
     *   requiredStatements: array<string>,
     *   asOf: string,
     *   balanceSheet: PostV1ConsolidationReportResponseStatementsBalanceSheet,
     *   profitLoss: PostV1ConsolidationReportResponseStatementsProfitLoss,
     *   balanceSheetDetail?: ?PostV1ConsolidationReportResponseStatementsBalanceSheetDetail,
     *   profitLossDetail?: ?PostV1ConsolidationReportResponseStatementsProfitLossDetail,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->category = $values['category'];
        $this->layout = $values['layout'];
        $this->requiredStatements = $values['requiredStatements'];
        $this->asOf = $values['asOf'];
        $this->balanceSheet = $values['balanceSheet'];
        $this->profitLoss = $values['profitLoss'];
        $this->balanceSheetDetail = $values['balanceSheetDetail'] ?? null;
        $this->profitLossDetail = $values['profitLossDetail'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
