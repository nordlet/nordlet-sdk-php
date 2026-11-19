<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class GbCorporationTaxComputeDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $periodStart
     */
    #[JsonProperty('periodStart')]
    public string $periodStart;

    /**
     * @var string $periodEnd
     */
    #[JsonProperty('periodEnd')]
    public string $periodEnd;

    /**
     * @var float $days
     */
    #[JsonProperty('days')]
    public float $days;

    /**
     * @var string $taxableTotalProfits
     */
    #[JsonProperty('taxableTotalProfits')]
    public string $taxableTotalProfits;

    /**
     * @var string $augmentedProfits
     */
    #[JsonProperty('augmentedProfits')]
    public string $augmentedProfits;

    /**
     * @var array<GbCorporationTaxComputeDeclarationsResponsePartsItem> $parts
     */
    #[JsonProperty('parts'), ArrayType([GbCorporationTaxComputeDeclarationsResponsePartsItem::class])]
    public array $parts;

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
     * @var array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public array $notes;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   periodStart: string,
     *   periodEnd: string,
     *   days: float,
     *   taxableTotalProfits: string,
     *   augmentedProfits: string,
     *   parts: array<GbCorporationTaxComputeDeclarationsResponsePartsItem>,
     *   marginalRelief: string,
     *   tax: string,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->days = $values['days'];
        $this->taxableTotalProfits = $values['taxableTotalProfits'];
        $this->augmentedProfits = $values['augmentedProfits'];
        $this->parts = $values['parts'];
        $this->marginalRelief = $values['marginalRelief'];
        $this->tax = $values['tax'];
        $this->notes = $values['notes'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
