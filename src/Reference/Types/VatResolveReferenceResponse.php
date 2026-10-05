<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class VatResolveReferenceResponse extends JsonSerializableType
{
    /**
     * @var value-of<VatResolveReferenceResponseScheme> $scheme
     */
    #[JsonProperty('scheme')]
    public string $scheme;

    /**
     * @var ?string $vatCountryCode
     */
    #[JsonProperty('vatCountryCode')]
    public ?string $vatCountryCode;

    /**
     * @var bool $reverseCharge
     */
    #[JsonProperty('reverseCharge')]
    public bool $reverseCharge;

    /**
     * @var bool $deemedSupplier
     */
    #[JsonProperty('deemedSupplier')]
    public bool $deemedSupplier;

    /**
     * @var bool $zeroRated
     */
    #[JsonProperty('zeroRated')]
    public bool $zeroRated;

    /**
     * @var array<VatResolveReferenceResponseRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([VatResolveReferenceResponseRatesItem::class])]
    public array $rates;

    /**
     * @var string $legalBasis
     */
    #[JsonProperty('legalBasis')]
    public string $legalBasis;

    /**
     * @var array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public array $notes;

    /**
     * @param array{
     *   scheme: value-of<VatResolveReferenceResponseScheme>,
     *   reverseCharge: bool,
     *   deemedSupplier: bool,
     *   zeroRated: bool,
     *   rates: array<VatResolveReferenceResponseRatesItem>,
     *   legalBasis: string,
     *   notes: array<string>,
     *   vatCountryCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->scheme = $values['scheme'];
        $this->vatCountryCode = $values['vatCountryCode'] ?? null;
        $this->reverseCharge = $values['reverseCharge'];
        $this->deemedSupplier = $values['deemedSupplier'];
        $this->zeroRated = $values['zeroRated'];
        $this->rates = $values['rates'];
        $this->legalBasis = $values['legalBasis'];
        $this->notes = $values['notes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
