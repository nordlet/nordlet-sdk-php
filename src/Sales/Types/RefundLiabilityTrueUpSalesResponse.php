<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class RefundLiabilityTrueUpSalesResponse extends JsonSerializableType
{
    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var string $estimated
     */
    #[JsonProperty('estimated')]
    public string $estimated;

    /**
     * @var string $consumed
     */
    #[JsonProperty('consumed')]
    public string $consumed;

    /**
     * @var string $remaining
     */
    #[JsonProperty('remaining')]
    public string $remaining;

    /**
     * @var string $delta
     */
    #[JsonProperty('delta')]
    public string $delta;

    /**
     * @var string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public string $journalTransactionId;

    /**
     * @param array{
     *   invoiceId: string,
     *   estimated: string,
     *   consumed: string,
     *   remaining: string,
     *   delta: string,
     *   journalTransactionId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceId = $values['invoiceId'];
        $this->estimated = $values['estimated'];
        $this->consumed = $values['consumed'];
        $this->remaining = $values['remaining'];
        $this->delta = $values['delta'];
        $this->journalTransactionId = $values['journalTransactionId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
