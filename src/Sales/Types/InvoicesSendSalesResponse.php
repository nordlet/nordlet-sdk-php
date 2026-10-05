<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesSendSalesResponse extends JsonSerializableType
{
    /**
     * @var bool $sent
     */
    #[JsonProperty('sent')]
    public bool $sent;

    /**
     * @var string $to
     */
    #[JsonProperty('to')]
    public string $to;

    /**
     * @param array{
     *   sent: bool,
     *   to: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sent = $values['sent'];
        $this->to = $values['to'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
