<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CatalogPriceListsItemsListRequest extends JsonSerializableType
{
    /**
     * @var string $priceListId
     */
    #[JsonProperty('priceListId')]
    public string $priceListId;

    /**
     * @param array{
     *   priceListId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->priceListId = $values['priceListId'];
    }
}
