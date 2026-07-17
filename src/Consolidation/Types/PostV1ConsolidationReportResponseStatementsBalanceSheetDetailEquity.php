<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationReportResponseStatementsBalanceSheetDetailEquity extends JsonSerializableType
{
    /**
     * @var string $capital
     */
    #[JsonProperty('capital')]
    public string $capital;

    /**
     * @var string $reserves
     */
    #[JsonProperty('reserves')]
    public string $reserves;

    /**
     * @var string $retainedEarnings
     */
    #[JsonProperty('retainedEarnings')]
    public string $retainedEarnings;

    /**
     * @var string $otherEquity
     */
    #[JsonProperty('otherEquity')]
    public string $otherEquity;

    /**
     * @var string $periodResult
     */
    #[JsonProperty('periodResult')]
    public string $periodResult;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   capital: string,
     *   reserves: string,
     *   retainedEarnings: string,
     *   otherEquity: string,
     *   periodResult: string,
     *   total: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->capital = $values['capital'];
        $this->reserves = $values['reserves'];
        $this->retainedEarnings = $values['retainedEarnings'];
        $this->otherEquity = $values['otherEquity'];
        $this->periodResult = $values['periodResult'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
