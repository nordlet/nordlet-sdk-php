<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsPosSalesResponseTotals extends JsonSerializableType
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
     * @var string $cash
     */
    #[JsonProperty('cash')]
    public string $cash;

    /**
     * @var string $card
     */
    #[JsonProperty('card')]
    public string $card;

    /**
     * @var string $cogs
     */
    #[JsonProperty('cogs')]
    public string $cogs;

    /**
     * @param array{
     *   net: string,
     *   vat: string,
     *   gross: string,
     *   cash: string,
     *   card: string,
     *   cogs: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->net = $values['net'];
        $this->vat = $values['vat'];
        $this->gross = $values['gross'];
        $this->cash = $values['cash'];
        $this->card = $values['card'];
        $this->cogs = $values['cogs'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
