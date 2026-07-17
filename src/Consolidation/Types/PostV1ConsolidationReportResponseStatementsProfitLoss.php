<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationReportResponseStatementsProfitLoss extends JsonSerializableType
{
    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var string $revenue
     */
    #[JsonProperty('revenue')]
    public string $revenue;

    /**
     * @var string $expenses
     */
    #[JsonProperty('expenses')]
    public string $expenses;

    /**
     * @var string $netResult
     */
    #[JsonProperty('netResult')]
    public string $netResult;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   revenue: string,
     *   expenses: string,
     *   netResult: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->revenue = $values['revenue'];
        $this->expenses = $values['expenses'];
        $this->netResult = $values['netResult'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
