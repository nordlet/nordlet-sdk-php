<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsCreateDeclarationsResponseItemExpensesOther extends JsonSerializableType
{
    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $cost
     */
    #[JsonProperty('cost')]
    public string $cost;

    /**
     * @var string $madeGood
     */
    #[JsonProperty('madeGood')]
    public string $madeGood;

    /**
     * @param array{
     *   description: string,
     *   cost: string,
     *   madeGood: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->description = $values['description'];
        $this->cost = $values['cost'];
        $this->madeGood = $values['madeGood'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
