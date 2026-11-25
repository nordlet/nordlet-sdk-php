<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItTfrAccrualComputeDeclarationsResponseRowsItemLeftOutItem extends JsonSerializableType
{
    /**
     * @var string $paymentType
     */
    #[JsonProperty('paymentType')]
    public string $paymentType;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   paymentType: string,
     *   amount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->paymentType = $values['paymentType'];
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
