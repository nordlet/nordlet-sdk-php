<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class GbVatPaymentsListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<GbVatPaymentsListDeclarationsResponsePaymentsItem> $payments
     */
    #[JsonProperty('payments'), ArrayType([GbVatPaymentsListDeclarationsResponsePaymentsItem::class])]
    public array $payments;

    /**
     * @param array{
     *   payments: array<GbVatPaymentsListDeclarationsResponsePaymentsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->payments = $values['payments'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
