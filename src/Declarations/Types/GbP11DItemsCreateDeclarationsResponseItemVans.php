<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsCreateDeclarationsResponseItemVans extends JsonSerializableType
{
    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $fuelAmount
     */
    #[JsonProperty('fuelAmount')]
    public ?string $fuelAmount;

    /**
     * @param array{
     *   amount: string,
     *   fuelAmount?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amount = $values['amount'];
        $this->fuelAmount = $values['fuelAmount'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
