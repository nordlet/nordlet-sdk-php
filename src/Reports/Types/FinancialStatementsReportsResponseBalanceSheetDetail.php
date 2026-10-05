<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class FinancialStatementsReportsResponseBalanceSheetDetail extends JsonSerializableType
{
    /**
     * @var FinancialStatementsReportsResponseBalanceSheetDetailNonCurrentAssets $nonCurrentAssets
     */
    #[JsonProperty('nonCurrentAssets')]
    public FinancialStatementsReportsResponseBalanceSheetDetailNonCurrentAssets $nonCurrentAssets;

    /**
     * @var FinancialStatementsReportsResponseBalanceSheetDetailCurrentAssets $currentAssets
     */
    #[JsonProperty('currentAssets')]
    public FinancialStatementsReportsResponseBalanceSheetDetailCurrentAssets $currentAssets;

    /**
     * @var FinancialStatementsReportsResponseBalanceSheetDetailEquity $equity
     */
    #[JsonProperty('equity')]
    public FinancialStatementsReportsResponseBalanceSheetDetailEquity $equity;

    /**
     * @var FinancialStatementsReportsResponseBalanceSheetDetailLiabilities $liabilities
     */
    #[JsonProperty('liabilities')]
    public FinancialStatementsReportsResponseBalanceSheetDetailLiabilities $liabilities;

    /**
     * @param array{
     *   nonCurrentAssets: FinancialStatementsReportsResponseBalanceSheetDetailNonCurrentAssets,
     *   currentAssets: FinancialStatementsReportsResponseBalanceSheetDetailCurrentAssets,
     *   equity: FinancialStatementsReportsResponseBalanceSheetDetailEquity,
     *   liabilities: FinancialStatementsReportsResponseBalanceSheetDetailLiabilities,
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
