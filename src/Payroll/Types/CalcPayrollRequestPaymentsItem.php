<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CalcPayrollRequestPaymentsItem extends JsonSerializableType
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
     * @var ?string $hours
     */
    #[JsonProperty('hours')]
    public ?string $hours;

    /**
     * @param array{
     *   paymentType: string,
     *   amount: string,
     *   hours?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->paymentType = $values['paymentType'];
        $this->amount = $values['amount'];
        $this->hours = $values['hours'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
