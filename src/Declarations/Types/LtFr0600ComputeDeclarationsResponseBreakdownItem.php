<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtFr0600ComputeDeclarationsResponseBreakdownItem extends JsonSerializableType
{
    /**
     * @var value-of<LtFr0600ComputeDeclarationsResponseBreakdownItemDirection> $direction
     */
    #[JsonProperty('direction')]
    public string $direction;

    /**
     * @var ?string $taxCode
     */
    #[JsonProperty('taxCode')]
    public ?string $taxCode;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @var string $vat
     */
    #[JsonProperty('vat')]
    public string $vat;

    /**
     * @var array<string> $taxableFields
     */
    #[JsonProperty('taxableFields'), ArrayType(['string'])]
    public array $taxableFields;

    /**
     * @var array<string> $vatFields
     */
    #[JsonProperty('vatFields'), ArrayType(['string'])]
    public array $vatFields;

    /**
     * @param array{
     *   direction: value-of<LtFr0600ComputeDeclarationsResponseBreakdownItemDirection>,
     *   net: string,
     *   vat: string,
     *   taxableFields: array<string>,
     *   vatFields: array<string>,
     *   taxCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->direction = $values['direction'];
        $this->taxCode = $values['taxCode'] ?? null;
        $this->net = $values['net'];
        $this->vat = $values['vat'];
        $this->taxableFields = $values['taxableFields'];
        $this->vatFields = $values['vatFields'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
