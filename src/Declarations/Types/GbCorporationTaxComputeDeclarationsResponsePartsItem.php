<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbCorporationTaxComputeDeclarationsResponsePartsItem extends JsonSerializableType
{
    /**
     * @var float $financialYear
     */
    #[JsonProperty('financialYear')]
    public float $financialYear;

    /**
     * @var string $from
     */
    #[JsonProperty('from')]
    public string $from;

    /**
     * @var string $to
     */
    #[JsonProperty('to')]
    public string $to;

    /**
     * @var float $days
     */
    #[JsonProperty('days')]
    public float $days;

    /**
     * @var string $profits
     */
    #[JsonProperty('profits')]
    public string $profits;

    /**
     * @var string $augmentedProfits
     */
    #[JsonProperty('augmentedProfits')]
    public string $augmentedProfits;

    /**
     * @var ?string $lowerLimit
     */
    #[JsonProperty('lowerLimit')]
    public ?string $lowerLimit;

    /**
     * @var ?string $upperLimit
     */
    #[JsonProperty('upperLimit')]
    public ?string $upperLimit;

    /**
     * @var value-of<GbCorporationTaxComputeDeclarationsResponsePartsItemRate> $rate
     */
    #[JsonProperty('rate')]
    public string $rate;

    /**
     * @var string $taxAtMainRate
     */
    #[JsonProperty('taxAtMainRate')]
    public string $taxAtMainRate;

    /**
     * @var string $marginalRelief
     */
    #[JsonProperty('marginalRelief')]
    public string $marginalRelief;

    /**
     * @var string $tax
     */
    #[JsonProperty('tax')]
    public string $tax;

    /**
     * @param array{
     *   financialYear: float,
     *   from: string,
     *   to: string,
     *   days: float,
     *   profits: string,
     *   augmentedProfits: string,
     *   rate: value-of<GbCorporationTaxComputeDeclarationsResponsePartsItemRate>,
     *   taxAtMainRate: string,
     *   marginalRelief: string,
     *   tax: string,
     *   lowerLimit?: ?string,
     *   upperLimit?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->financialYear = $values['financialYear'];
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->days = $values['days'];
        $this->profits = $values['profits'];
        $this->augmentedProfits = $values['augmentedProfits'];
        $this->lowerLimit = $values['lowerLimit'] ?? null;
        $this->upperLimit = $values['upperLimit'] ?? null;
        $this->rate = $values['rate'];
        $this->taxAtMainRate = $values['taxAtMainRate'];
        $this->marginalRelief = $values['marginalRelief'];
        $this->tax = $values['tax'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
