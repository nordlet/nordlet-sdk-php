<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PriceListsItemsDeleteCatalogRequest extends JsonSerializableType
{
    /**
     * @var string $priceListId
     */
    #[JsonProperty('priceListId')]
    public string $priceListId;

    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

    /**
     * @param array{
     *   priceListId: string,
     *   itemId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->priceListId = $values['priceListId'];
        $this->itemId = $values['itemId'];
    }
}
