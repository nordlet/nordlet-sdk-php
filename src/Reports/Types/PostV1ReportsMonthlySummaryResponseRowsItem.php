<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsMonthlySummaryResponseRowsItem extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var string $receivables
     */
    #[JsonProperty('receivables')]
    public string $receivables;

    /**
     * @var string $payables
     */
    #[JsonProperty('payables')]
    public string $payables;

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
     *   year: int,
     *   month: int,
     *   receivables: string,
     *   payables: string,
     *   revenue: string,
     *   expenses: string,
     *   netResult: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->receivables = $values['receivables'];
        $this->payables = $values['payables'];
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
