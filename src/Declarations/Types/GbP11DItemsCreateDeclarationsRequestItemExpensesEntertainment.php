<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsCreateDeclarationsRequestItemExpensesEntertainment extends JsonSerializableType
{
    /**
     * @var bool $tradingOrganisation
     */
    #[JsonProperty('tradingOrganisation')]
    public bool $tradingOrganisation;

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
     *   tradingOrganisation: bool,
     *   cost: string,
     *   madeGood: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tradingOrganisation = $values['tradingOrganisation'];
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
