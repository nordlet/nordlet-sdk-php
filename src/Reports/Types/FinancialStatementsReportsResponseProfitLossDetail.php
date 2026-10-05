<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class FinancialStatementsReportsResponseProfitLossDetail extends JsonSerializableType
{
    /**
     * @var string $salesRevenue
     */
    #[JsonProperty('salesRevenue')]
    public string $salesRevenue;

    /**
     * @var string $costOfSales
     */
    #[JsonProperty('costOfSales')]
    public string $costOfSales;

    /**
     * @var string $grossProfit
     */
    #[JsonProperty('grossProfit')]
    public string $grossProfit;

    /**
     * @var string $sellingExpenses
     */
    #[JsonProperty('sellingExpenses')]
    public string $sellingExpenses;

    /**
     * @var string $adminExpenses
     */
    #[JsonProperty('adminExpenses')]
    public string $adminExpenses;

    /**
     * @var string $operatingProfit
     */
    #[JsonProperty('operatingProfit')]
    public string $operatingProfit;

    /**
     * @var string $otherActivityResult
     */
    #[JsonProperty('otherActivityResult')]
    public string $otherActivityResult;

    /**
     * @var string $financialActivityResult
     */
    #[JsonProperty('financialActivityResult')]
    public string $financialActivityResult;

    /**
     * @var string $profitBeforeTax
     */
    #[JsonProperty('profitBeforeTax')]
    public string $profitBeforeTax;

    /**
     * @var string $incomeTax
     */
    #[JsonProperty('incomeTax')]
    public string $incomeTax;

    /**
     * @var string $netProfit
     */
    #[JsonProperty('netProfit')]
    public string $netProfit;

    /**
     * @param array{
     *   salesRevenue: string,
     *   costOfSales: string,
     *   grossProfit: string,
     *   sellingExpenses: string,
     *   adminExpenses: string,
     *   operatingProfit: string,
     *   otherActivityResult: string,
     *   financialActivityResult: string,
     *   profitBeforeTax: string,
     *   incomeTax: string,
     *   netProfit: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->salesRevenue = $values['salesRevenue'];
        $this->costOfSales = $values['costOfSales'];
        $this->grossProfit = $values['grossProfit'];
        $this->sellingExpenses = $values['sellingExpenses'];
        $this->adminExpenses = $values['adminExpenses'];
        $this->operatingProfit = $values['operatingProfit'];
        $this->otherActivityResult = $values['otherActivityResult'];
        $this->financialActivityResult = $values['financialActivityResult'];
        $this->profitBeforeTax = $values['profitBeforeTax'];
        $this->incomeTax = $values['incomeTax'];
        $this->netProfit = $values['netProfit'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
