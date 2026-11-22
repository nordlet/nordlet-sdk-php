<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsCreateDeclarationsResponseItemPayment extends JsonSerializableType
{
    /**
     * @var value-of<GbP11DItemsCreateDeclarationsResponseItemPaymentPayment> $payment
     */
    #[JsonProperty('payment')]
    public string $payment;

    /**
     * @var ?string $otherDescription
     */
    #[JsonProperty('otherDescription')]
    public ?string $otherDescription;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   payment: value-of<GbP11DItemsCreateDeclarationsResponseItemPaymentPayment>,
     *   amount: string,
     *   otherDescription?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->payment = $values['payment'];
        $this->otherDescription = $values['otherDescription'] ?? null;
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
