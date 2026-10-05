<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PlIntrastatGenerateDeclarationsResponseTotals extends JsonSerializableType
{
    /**
     * @var string $invoicedValue
     */
    #[JsonProperty('invoicedValue')]
    public string $invoicedValue;

    /**
     * @var ?string $statisticalValue
     */
    #[JsonProperty('statisticalValue')]
    public ?string $statisticalValue;

    /**
     * @var string $netMassKg
     */
    #[JsonProperty('netMassKg')]
    public string $netMassKg;

    /**
     * @var int $lines
     */
    #[JsonProperty('lines')]
    public int $lines;

    /**
     * @param array{
     *   invoicedValue: string,
     *   netMassKg: string,
     *   lines: int,
     *   statisticalValue?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoicedValue = $values['invoicedValue'];
        $this->statisticalValue = $values['statisticalValue'] ?? null;
        $this->netMassKg = $values['netMassKg'];
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
