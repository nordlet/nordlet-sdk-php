<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsOnlineSalesResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $channel
     */
    #[JsonProperty('channel')]
    public string $channel;

    /**
     * @var int $orders
     */
    #[JsonProperty('orders')]
    public int $orders;

    /**
     * @var int $fulfilled
     */
    #[JsonProperty('fulfilled')]
    public int $fulfilled;

    /**
     * @var int $cancelled
     */
    #[JsonProperty('cancelled')]
    public int $cancelled;

    /**
     * @var int $open
     */
    #[JsonProperty('open')]
    public int $open;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @var string $gross
     */
    #[JsonProperty('gross')]
    public string $gross;

    /**
     * @param array{
     *   channel: string,
     *   orders: int,
     *   fulfilled: int,
     *   cancelled: int,
     *   open: int,
     *   net: string,
     *   gross: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->channel = $values['channel'];
        $this->orders = $values['orders'];
        $this->fulfilled = $values['fulfilled'];
        $this->cancelled = $values['cancelled'];
        $this->open = $values['open'];
        $this->net = $values['net'];
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
