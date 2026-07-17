<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsEuPurchasesResponseTotals extends JsonSerializableType
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
     * @param array{
     *   net: string,
     *   vat: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->net = $values['net'];
        $this->vat = $values['vat'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
