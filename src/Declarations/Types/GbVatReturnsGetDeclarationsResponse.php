<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbVatReturnsGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $periodKey
     */
    #[JsonProperty('periodKey')]
    public string $periodKey;

    /**
     * @var float $vatDueSales
     */
    #[JsonProperty('vatDueSales')]
    public float $vatDueSales;

    /**
     * @var float $vatDueAcquisitions
     */
    #[JsonProperty('vatDueAcquisitions')]
    public float $vatDueAcquisitions;

    /**
     * @var float $totalVatDue
     */
    #[JsonProperty('totalVatDue')]
    public float $totalVatDue;

    /**
     * @var float $vatReclaimedCurrPeriod
     */
    #[JsonProperty('vatReclaimedCurrPeriod')]
    public float $vatReclaimedCurrPeriod;

    /**
     * @var float $netVatDue
     */
    #[JsonProperty('netVatDue')]
    public float $netVatDue;

    /**
     * @var float $totalValueSalesExVat
     */
    #[JsonProperty('totalValueSalesExVAT')]
    public float $totalValueSalesExVat;

    /**
     * @var float $totalValuePurchasesExVat
     */
    #[JsonProperty('totalValuePurchasesExVAT')]
    public float $totalValuePurchasesExVat;

    /**
     * @var float $totalValueGoodsSuppliedExVat
     */
    #[JsonProperty('totalValueGoodsSuppliedExVAT')]
    public float $totalValueGoodsSuppliedExVat;

    /**
     * @var float $totalAcquisitionsExVat
     */
    #[JsonProperty('totalAcquisitionsExVAT')]
    public float $totalAcquisitionsExVat;

    /**
     * @param array{
     *   periodKey: string,
     *   vatDueSales: float,
     *   vatDueAcquisitions: float,
     *   totalVatDue: float,
     *   vatReclaimedCurrPeriod: float,
     *   netVatDue: float,
     *   totalValueSalesExVat: float,
     *   totalValuePurchasesExVat: float,
     *   totalValueGoodsSuppliedExVat: float,
     *   totalAcquisitionsExVat: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->periodKey = $values['periodKey'];
        $this->vatDueSales = $values['vatDueSales'];
        $this->vatDueAcquisitions = $values['vatDueAcquisitions'];
        $this->totalVatDue = $values['totalVatDue'];
        $this->vatReclaimedCurrPeriod = $values['vatReclaimedCurrPeriod'];
        $this->netVatDue = $values['netVatDue'];
        $this->totalValueSalesExVat = $values['totalValueSalesExVat'];
        $this->totalValuePurchasesExVat = $values['totalValuePurchasesExVat'];
        $this->totalValueGoodsSuppliedExVat = $values['totalValueGoodsSuppliedExVat'];
        $this->totalAcquisitionsExVat = $values['totalAcquisitionsExVat'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
