<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class FinancialStatementsReportsResponseProfitLoss extends JsonSerializableType
{
    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

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
     *   fromDate: DateTime,
     *   toDate: DateTime,
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
