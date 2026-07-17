<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CatalogPriceListsItemsSetRequestItemsItem extends JsonSerializableType
{
    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

    /**
     * @var string $unitPriceExclVat
     */
    #[JsonProperty('unitPriceExclVat')]
    public string $unitPriceExclVat;

    /**
     * @param array{
     *   itemId: string,
     *   unitPriceExclVat: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
        $this->unitPriceExclVat = $values['unitPriceExclVat'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
