<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbVatLiabilitiesListDeclarationsResponseLiabilitiesItem extends JsonSerializableType
{
    /**
     * @var ?GbVatLiabilitiesListDeclarationsResponseLiabilitiesItemTaxPeriod $taxPeriod
     */
    #[JsonProperty('taxPeriod')]
    public ?GbVatLiabilitiesListDeclarationsResponseLiabilitiesItemTaxPeriod $taxPeriod;

    /**
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var float $originalAmount
     */
    #[JsonProperty('originalAmount')]
    public float $originalAmount;

    /**
     * @var ?float $outstandingAmount
     */
    #[JsonProperty('outstandingAmount')]
    public ?float $outstandingAmount;

    /**
     * @var ?string $due
     */
    #[JsonProperty('due')]
    public ?string $due;

    /**
     * @param array{
     *   type: string,
     *   originalAmount: float,
     *   taxPeriod?: ?GbVatLiabilitiesListDeclarationsResponseLiabilitiesItemTaxPeriod,
     *   outstandingAmount?: ?float,
     *   due?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->taxPeriod = $values['taxPeriod'] ?? null;
        $this->type = $values['type'];
        $this->originalAmount = $values['originalAmount'];
        $this->outstandingAmount = $values['outstandingAmount'] ?? null;
        $this->due = $values['due'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
