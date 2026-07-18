<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesRefundLiabilityTrueUpRequest extends JsonSerializableType
{
    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var string $estimatedTotal
     */
    #[JsonProperty('estimatedTotal')]
    public string $estimatedTotal;

    /**
     * @var ?string $date
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @param array{
     *   invoiceId: string,
     *   estimatedTotal: string,
     *   date?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceId = $values['invoiceId'];
        $this->estimatedTotal = $values['estimatedTotal'];
        $this->date = $values['date'] ?? null;
    }
}
