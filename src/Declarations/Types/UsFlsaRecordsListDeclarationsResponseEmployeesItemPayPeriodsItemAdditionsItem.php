<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemAdditionsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $paymentType
     */
    #[JsonProperty('paymentType')]
    public ?string $paymentType;

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
     *   name: string,
     *   amount: string,
     *   paymentType?: ?string,
     *   hours?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->paymentType = $values['paymentType'] ?? null;
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
