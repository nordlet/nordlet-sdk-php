<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsFinancialStatementsResponseBalanceSheet extends JsonSerializableType
{
    /**
     * @var string $nonCurrentAssets
     */
    #[JsonProperty('nonCurrentAssets')]
    public string $nonCurrentAssets;

    /**
     * @var string $currentAssets
     */
    #[JsonProperty('currentAssets')]
    public string $currentAssets;

    /**
     * @var string $totalAssets
     */
    #[JsonProperty('totalAssets')]
    public string $totalAssets;

    /**
     * @var string $equity
     */
    #[JsonProperty('equity')]
    public string $equity;

    /**
     * @var string $ofWhichResult
     */
    #[JsonProperty('ofWhichResult')]
    public string $ofWhichResult;

    /**
     * @var string $liabilities
     */
    #[JsonProperty('liabilities')]
    public string $liabilities;

    /**
     * @var string $totalEquityAndLiabilities
     */
    #[JsonProperty('totalEquityAndLiabilities')]
    public string $totalEquityAndLiabilities;

    /**
     * @var bool $balanced
     */
    #[JsonProperty('balanced')]
    public bool $balanced;

    /**
     * @param array{
     *   nonCurrentAssets: string,
     *   currentAssets: string,
     *   totalAssets: string,
     *   equity: string,
     *   ofWhichResult: string,
     *   liabilities: string,
     *   totalEquityAndLiabilities: string,
     *   balanced: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->nonCurrentAssets = $values['nonCurrentAssets'];
        $this->currentAssets = $values['currentAssets'];
        $this->totalAssets = $values['totalAssets'];
        $this->equity = $values['equity'];
        $this->ofWhichResult = $values['ofWhichResult'];
        $this->liabilities = $values['liabilities'];
        $this->totalEquityAndLiabilities = $values['totalEquityAndLiabilities'];
        $this->balanced = $values['balanced'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
