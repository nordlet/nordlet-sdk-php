<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Catalog\Types\PriceListsItemsSetCatalogRequestItemsItem;
use Nordlet\Core\Types\ArrayType;

class PriceListsItemsSetCatalogRequest extends JsonSerializableType
{
    /**
     * @var string $priceListId
     */
    #[JsonProperty('priceListId')]
    public string $priceListId;

    /**
     * @var array<PriceListsItemsSetCatalogRequestItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([PriceListsItemsSetCatalogRequestItemsItem::class])]
    public array $items;

    /**
     * @param array{
     *   priceListId: string,
     *   items: array<PriceListsItemsSetCatalogRequestItemsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->priceListId = $values['priceListId'];
        $this->items = $values['items'];
    }
}
