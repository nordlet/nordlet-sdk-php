<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VatDetailReportsResponseTotals extends JsonSerializableType
{
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
     * @var string $gross
     */
    #[JsonProperty('gross')]
    public string $gross;

    /**
     * @param array{
     *   net: string,
     *   vat: string,
     *   gross: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->net = $values['net'];
        $this->vat = $values['vat'];
        $this->gross = $values['gross'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
