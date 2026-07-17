<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsFinancialStatementsResponse extends JsonSerializableType
{
    /**
     * @var value-of<PostV1ReportsFinancialStatementsResponseCategory> $category
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
     * @var PostV1ReportsFinancialStatementsResponseBalanceSheet $balanceSheet
     */
    #[JsonProperty('balanceSheet')]
    public PostV1ReportsFinancialStatementsResponseBalanceSheet $balanceSheet;

    /**
     * @var PostV1ReportsFinancialStatementsResponseProfitLoss $profitLoss
     */
    #[JsonProperty('profitLoss')]
    public PostV1ReportsFinancialStatementsResponseProfitLoss $profitLoss;

    /**
     * @var ?PostV1ReportsFinancialStatementsResponseBalanceSheetDetail $balanceSheetDetail
     */
    #[JsonProperty('balanceSheetDetail')]
    public ?PostV1ReportsFinancialStatementsResponseBalanceSheetDetail $balanceSheetDetail;

    /**
     * @var ?PostV1ReportsFinancialStatementsResponseProfitLossDetail $profitLossDetail
     */
    #[JsonProperty('profitLossDetail')]
    public ?PostV1ReportsFinancialStatementsResponseProfitLossDetail $profitLossDetail;

    /**
     * @var ?array<PostV1ReportsFinancialStatementsResponseEquityChangesItem> $equityChanges
     */
    #[JsonProperty('equityChanges'), ArrayType([PostV1ReportsFinancialStatementsResponseEquityChangesItem::class])]
    public ?array $equityChanges;

    /**
     * @var ?PostV1ReportsFinancialStatementsResponseCashFlow $cashFlow
     */
    #[JsonProperty('cashFlow')]
    public ?PostV1ReportsFinancialStatementsResponseCashFlow $cashFlow;

    /**
     * @param array{
     *   category: value-of<PostV1ReportsFinancialStatementsResponseCategory>,
     *   layout: string,
     *   requiredStatements: array<string>,
     *   asOf: string,
     *   balanceSheet: PostV1ReportsFinancialStatementsResponseBalanceSheet,
     *   profitLoss: PostV1ReportsFinancialStatementsResponseProfitLoss,
     *   balanceSheetDetail?: ?PostV1ReportsFinancialStatementsResponseBalanceSheetDetail,
     *   profitLossDetail?: ?PostV1ReportsFinancialStatementsResponseProfitLossDetail,
     *   equityChanges?: ?array<PostV1ReportsFinancialStatementsResponseEquityChangesItem>,
     *   cashFlow?: ?PostV1ReportsFinancialStatementsResponseCashFlow,
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
