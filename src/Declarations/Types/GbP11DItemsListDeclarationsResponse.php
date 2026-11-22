<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class GbP11DItemsListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<GbP11DItemsListDeclarationsResponseItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([GbP11DItemsListDeclarationsResponseItemsItem::class])]
    public array $items;

    /**
     * @param array{
     *   items: array<GbP11DItemsListDeclarationsResponseItemsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->items = $values['items'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
