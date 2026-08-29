<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationIntercompanyReportResponseDirectionsItemTotalsItem extends JsonSerializableType
{
    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $salesGross
     */
    #[JsonProperty('salesGross')]
    public string $salesGross;

    /**
     * @var string $purchasesGross
     */
    #[JsonProperty('purchasesGross')]
    public string $purchasesGross;

    /**
     * @var string $grossDifference
     */
    #[JsonProperty('grossDifference')]
    public string $grossDifference;

    /**
     * @var string $openReceivable
     */
    #[JsonProperty('openReceivable')]
    public string $openReceivable;

    /**
     * @var string $openPayable
     */
    #[JsonProperty('openPayable')]
    public string $openPayable;

    /**
     * @var string $openDifference
     */
    #[JsonProperty('openDifference')]
    public string $openDifference;

    /**
     * @param array{
     *   currency: string,
     *   salesGross: string,
     *   purchasesGross: string,
     *   grossDifference: string,
     *   openReceivable: string,
     *   openPayable: string,
     *   openDifference: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currency = $values['currency'];
        $this->salesGross = $values['salesGross'];
        $this->purchasesGross = $values['purchasesGross'];
        $this->grossDifference = $values['grossDifference'];
        $this->openReceivable = $values['openReceivable'];
        $this->openPayable = $values['openPayable'];
        $this->openDifference = $values['openDifference'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
