<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsFinancialStatementsResponseBalanceSheetDetail extends JsonSerializableType
{
    /**
     * @var PostV1ReportsFinancialStatementsResponseBalanceSheetDetailNonCurrentAssets $nonCurrentAssets
     */
    #[JsonProperty('nonCurrentAssets')]
    public PostV1ReportsFinancialStatementsResponseBalanceSheetDetailNonCurrentAssets $nonCurrentAssets;

    /**
     * @var PostV1ReportsFinancialStatementsResponseBalanceSheetDetailCurrentAssets $currentAssets
     */
    #[JsonProperty('currentAssets')]
    public PostV1ReportsFinancialStatementsResponseBalanceSheetDetailCurrentAssets $currentAssets;

    /**
     * @var PostV1ReportsFinancialStatementsResponseBalanceSheetDetailEquity $equity
     */
    #[JsonProperty('equity')]
    public PostV1ReportsFinancialStatementsResponseBalanceSheetDetailEquity $equity;

    /**
     * @var PostV1ReportsFinancialStatementsResponseBalanceSheetDetailLiabilities $liabilities
     */
    #[JsonProperty('liabilities')]
    public PostV1ReportsFinancialStatementsResponseBalanceSheetDetailLiabilities $liabilities;

    /**
     * @param array{
     *   nonCurrentAssets: PostV1ReportsFinancialStatementsResponseBalanceSheetDetailNonCurrentAssets,
     *   currentAssets: PostV1ReportsFinancialStatementsResponseBalanceSheetDetailCurrentAssets,
     *   equity: PostV1ReportsFinancialStatementsResponseBalanceSheetDetailEquity,
     *   liabilities: PostV1ReportsFinancialStatementsResponseBalanceSheetDetailLiabilities,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->nonCurrentAssets = $values['nonCurrentAssets'];
        $this->currentAssets = $values['currentAssets'];
        $this->equity = $values['equity'];
        $this->liabilities = $values['liabilities'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
