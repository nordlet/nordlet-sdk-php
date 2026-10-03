<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PayrollLinesAttendanceResponseAdditionsItem extends JsonSerializableType
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
     * @var bool $taxable
     */
    #[JsonProperty('taxable')]
    public bool $taxable;

    /**
     * @param array{
     *   name: string,
     *   amount: string,
     *   taxable: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->amount = $values['amount'];
        $this->taxable = $values['taxable'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
