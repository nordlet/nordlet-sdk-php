<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class FinancialStatementsReportsResponse extends JsonSerializableType
{
    /**
     * @var value-of<FinancialStatementsReportsResponseCategory> $category
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
     * @var FinancialStatementsReportsResponseBalanceSheet $balanceSheet
     */
    #[JsonProperty('balanceSheet')]
    public FinancialStatementsReportsResponseBalanceSheet $balanceSheet;

    /**
     * @var FinancialStatementsReportsResponseProfitLoss $profitLoss
     */
    #[JsonProperty('profitLoss')]
    public FinancialStatementsReportsResponseProfitLoss $profitLoss;

    /**
     * @var ?FinancialStatementsReportsResponseBalanceSheetDetail $balanceSheetDetail
     */
    #[JsonProperty('balanceSheetDetail')]
    public ?FinancialStatementsReportsResponseBalanceSheetDetail $balanceSheetDetail;

    /**
     * @var ?FinancialStatementsReportsResponseProfitLossDetail $profitLossDetail
     */
    #[JsonProperty('profitLossDetail')]
    public ?FinancialStatementsReportsResponseProfitLossDetail $profitLossDetail;

    /**
     * @var ?array<FinancialStatementsReportsResponseEquityChangesItem> $equityChanges
     */
    #[JsonProperty('equityChanges'), ArrayType([FinancialStatementsReportsResponseEquityChangesItem::class])]
    public ?array $equityChanges;

    /**
     * @var ?FinancialStatementsReportsResponseCashFlow $cashFlow
     */
    #[JsonProperty('cashFlow')]
    public ?FinancialStatementsReportsResponseCashFlow $cashFlow;

    /**
     * @param array{
     *   category: value-of<FinancialStatementsReportsResponseCategory>,
     *   layout: string,
     *   requiredStatements: array<string>,
     *   asOf: string,
     *   balanceSheet: FinancialStatementsReportsResponseBalanceSheet,
     *   profitLoss: FinancialStatementsReportsResponseProfitLoss,
     *   balanceSheetDetail?: ?FinancialStatementsReportsResponseBalanceSheetDetail,
     *   profitLossDetail?: ?FinancialStatementsReportsResponseProfitLossDetail,
     *   equityChanges?: ?array<FinancialStatementsReportsResponseEquityChangesItem>,
     *   cashFlow?: ?FinancialStatementsReportsResponseCashFlow,
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
        $this->equityChanges = $values['equityChanges'] ?? null;
        $this->cashFlow = $values['cashFlow'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
