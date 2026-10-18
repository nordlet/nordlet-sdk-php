<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class RunsCreatePayrollRequestLinesItemAdditionsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?bool $taxable
     */
    #[JsonProperty('taxable')]
    public ?bool $taxable;

    /**
     * @var ?string $paymentType
     */
    #[JsonProperty('paymentType')]
    public ?string $paymentType;

    /**
     * @var ?string $hours
     */
    #[JsonProperty('hours')]
    public ?string $hours;

    /**
     * @param array{
     *   name: string,
     *   amount: string,
     *   taxable?: ?bool,
     *   paymentType?: ?string,
     *   hours?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->amount = $values['amount'];
        $this->taxable = $values['taxable'] ?? null;
        $this->paymentType = $values['paymentType'] ?? null;
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
