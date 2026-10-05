<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReportConsolidationResponseMembersItem extends JsonSerializableType
{
    /**
     * @var string $companyId
     */
    #[JsonProperty('companyId')]
    public string $companyId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $baseCurrency
     */
    #[JsonProperty('baseCurrency')]
    public string $baseCurrency;

    /**
     * @var string $ownershipPercent
     */
    #[JsonProperty('ownershipPercent')]
    public string $ownershipPercent;

    /**
     * @var value-of<ReportConsolidationResponseMembersItemMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var string $fxFactor
     */
    #[JsonProperty('fxFactor')]
    public string $fxFactor;

    /**
     * @var string $rateFrom
     */
    #[JsonProperty('rateFrom')]
    public string $rateFrom;

    /**
     * @var string $rateTo
     */
    #[JsonProperty('rateTo')]
    public string $rateTo;

    /**
     * @var string $totalAssets
     */
    #[JsonProperty('totalAssets')]
    public string $totalAssets;

    /**
     * @var string $netEquity
     */
    #[JsonProperty('netEquity')]
    public string $netEquity;

    /**
     * @var string $periodResult
     */
    #[JsonProperty('periodResult')]
    public string $periodResult;

    /**
     * @param array{
     *   companyId: string,
     *   name: string,
     *   baseCurrency: string,
     *   ownershipPercent: string,
     *   method: value-of<ReportConsolidationResponseMembersItemMethod>,
     *   fxFactor: string,
     *   rateFrom: string,
     *   rateTo: string,
     *   totalAssets: string,
     *   netEquity: string,
     *   periodResult: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companyId = $values['companyId'];
        $this->name = $values['name'];
        $this->baseCurrency = $values['baseCurrency'];
        $this->ownershipPercent = $values['ownershipPercent'];
        $this->method = $values['method'];
        $this->fxFactor = $values['fxFactor'];
        $this->rateFrom = $values['rateFrom'];
        $this->rateTo = $values['rateTo'];
        $this->totalAssets = $values['totalAssets'];
        $this->netEquity = $values['netEquity'];
        $this->periodResult = $values['periodResult'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
