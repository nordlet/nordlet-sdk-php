<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbVatPaymentsListDeclarationsResponsePaymentsItem extends JsonSerializableType
{
    /**
     * @var float $amount
     */
    #[JsonProperty('amount')]
    public float $amount;

    /**
     * @var ?string $received
     */
    #[JsonProperty('received')]
    public ?string $received;

    /**
     * @param array{
     *   amount: float,
     *   received?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amount = $values['amount'];
        $this->received = $values['received'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
