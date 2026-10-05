<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ReportConsolidationResponseStatements extends JsonSerializableType
{
    /**
     * @var value-of<ReportConsolidationResponseStatementsCategory> $category
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
     * @var ReportConsolidationResponseStatementsBalanceSheet $balanceSheet
     */
    #[JsonProperty('balanceSheet')]
    public ReportConsolidationResponseStatementsBalanceSheet $balanceSheet;

    /**
     * @var ReportConsolidationResponseStatementsProfitLoss $profitLoss
     */
    #[JsonProperty('profitLoss')]
    public ReportConsolidationResponseStatementsProfitLoss $profitLoss;

    /**
     * @var ?ReportConsolidationResponseStatementsBalanceSheetDetail $balanceSheetDetail
     */
    #[JsonProperty('balanceSheetDetail')]
    public ?ReportConsolidationResponseStatementsBalanceSheetDetail $balanceSheetDetail;

    /**
     * @var ?ReportConsolidationResponseStatementsProfitLossDetail $profitLossDetail
     */
    #[JsonProperty('profitLossDetail')]
    public ?ReportConsolidationResponseStatementsProfitLossDetail $profitLossDetail;

    /**
     * @param array{
     *   category: value-of<ReportConsolidationResponseStatementsCategory>,
     *   layout: string,
     *   requiredStatements: array<string>,
     *   asOf: string,
     *   balanceSheet: ReportConsolidationResponseStatementsBalanceSheet,
     *   profitLoss: ReportConsolidationResponseStatementsProfitLoss,
     *   balanceSheetDetail?: ?ReportConsolidationResponseStatementsBalanceSheetDetail,
     *   profitLossDetail?: ?ReportConsolidationResponseStatementsProfitLossDetail,
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
