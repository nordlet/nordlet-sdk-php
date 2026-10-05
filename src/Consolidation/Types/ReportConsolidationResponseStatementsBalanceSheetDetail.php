<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReportConsolidationResponseStatementsBalanceSheetDetail extends JsonSerializableType
{
    /**
     * @var ReportConsolidationResponseStatementsBalanceSheetDetailNonCurrentAssets $nonCurrentAssets
     */
    #[JsonProperty('nonCurrentAssets')]
    public ReportConsolidationResponseStatementsBalanceSheetDetailNonCurrentAssets $nonCurrentAssets;

    /**
     * @var ReportConsolidationResponseStatementsBalanceSheetDetailCurrentAssets $currentAssets
     */
    #[JsonProperty('currentAssets')]
    public ReportConsolidationResponseStatementsBalanceSheetDetailCurrentAssets $currentAssets;

    /**
     * @var ReportConsolidationResponseStatementsBalanceSheetDetailEquity $equity
     */
    #[JsonProperty('equity')]
    public ReportConsolidationResponseStatementsBalanceSheetDetailEquity $equity;

    /**
     * @var ReportConsolidationResponseStatementsBalanceSheetDetailLiabilities $liabilities
     */
    #[JsonProperty('liabilities')]
    public ReportConsolidationResponseStatementsBalanceSheetDetailLiabilities $liabilities;

    /**
     * @param array{
     *   nonCurrentAssets: ReportConsolidationResponseStatementsBalanceSheetDetailNonCurrentAssets,
     *   currentAssets: ReportConsolidationResponseStatementsBalanceSheetDetailCurrentAssets,
     *   equity: ReportConsolidationResponseStatementsBalanceSheetDetailEquity,
     *   liabilities: ReportConsolidationResponseStatementsBalanceSheetDetailLiabilities,
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
