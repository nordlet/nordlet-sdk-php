<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationReportResponseStatementsBalanceSheetDetail extends JsonSerializableType
{
    /**
     * @var PostV1ConsolidationReportResponseStatementsBalanceSheetDetailNonCurrentAssets $nonCurrentAssets
     */
    #[JsonProperty('nonCurrentAssets')]
    public PostV1ConsolidationReportResponseStatementsBalanceSheetDetailNonCurrentAssets $nonCurrentAssets;

    /**
     * @var PostV1ConsolidationReportResponseStatementsBalanceSheetDetailCurrentAssets $currentAssets
     */
    #[JsonProperty('currentAssets')]
    public PostV1ConsolidationReportResponseStatementsBalanceSheetDetailCurrentAssets $currentAssets;

    /**
     * @var PostV1ConsolidationReportResponseStatementsBalanceSheetDetailEquity $equity
     */
    #[JsonProperty('equity')]
    public PostV1ConsolidationReportResponseStatementsBalanceSheetDetailEquity $equity;

    /**
     * @var PostV1ConsolidationReportResponseStatementsBalanceSheetDetailLiabilities $liabilities
     */
    #[JsonProperty('liabilities')]
    public PostV1ConsolidationReportResponseStatementsBalanceSheetDetailLiabilities $liabilities;

    /**
     * @param array{
     *   nonCurrentAssets: PostV1ConsolidationReportResponseStatementsBalanceSheetDetailNonCurrentAssets,
     *   currentAssets: PostV1ConsolidationReportResponseStatementsBalanceSheetDetailCurrentAssets,
     *   equity: PostV1ConsolidationReportResponseStatementsBalanceSheetDetailEquity,
     *   liabilities: PostV1ConsolidationReportResponseStatementsBalanceSheetDetailLiabilities,
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
