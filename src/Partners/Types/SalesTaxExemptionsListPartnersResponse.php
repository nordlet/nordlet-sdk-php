<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class SalesTaxExemptionsListPartnersResponse extends JsonSerializableType
{
    /**
     * @var array<SalesTaxExemptionsListPartnersResponseItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([SalesTaxExemptionsListPartnersResponseItemsItem::class])]
    public array $items;

    /**
     * @param array{
     *   items: array<SalesTaxExemptionsListPartnersResponseItemsItem>,
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
