<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Catalog\Types\PostV1CatalogPriceListsItemsSetRequestItemsItem;
use Nordlet\Core\Types\ArrayType;

class PostV1CatalogPriceListsItemsSetRequest extends JsonSerializableType
{
    /**
     * @var string $priceListId
     */
    #[JsonProperty('priceListId')]
    public string $priceListId;

    /**
     * @var array<PostV1CatalogPriceListsItemsSetRequestItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([PostV1CatalogPriceListsItemsSetRequestItemsItem::class])]
    public array $items;

    /**
     * @param array{
     *   priceListId: string,
     *   items: array<PostV1CatalogPriceListsItemsSetRequestItemsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->priceListId = $values['priceListId'];
        $this->items = $values['items'];
    }
}
