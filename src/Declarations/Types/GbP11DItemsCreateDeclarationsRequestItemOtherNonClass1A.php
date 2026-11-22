<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1A extends JsonSerializableType
{
    /**
     * @var value-of<GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1AItem> $item
     */
    #[JsonProperty('item')]
    public string $item;

    /**
     * @var ?string $otherDescription
     */
    #[JsonProperty('otherDescription')]
    public ?string $otherDescription;

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
     *   item: value-of<GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1AItem>,
     *   cost: string,
     *   madeGood: string,
     *   otherDescription?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->item = $values['item'];
        $this->otherDescription = $values['otherDescription'] ?? null;
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
