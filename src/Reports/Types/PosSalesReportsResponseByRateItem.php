<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PosSalesReportsResponseByRateItem extends JsonSerializableType
{
    /**
     * @var string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public string $vatRatePercent;

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
     *   vatRatePercent: string,
     *   net: string,
     *   vat: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->vatRatePercent = $values['vatRatePercent'];
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
