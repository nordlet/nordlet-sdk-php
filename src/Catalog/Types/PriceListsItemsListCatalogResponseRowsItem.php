<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PriceListsItemsListCatalogResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

    /**
     * @var string $itemName
     */
    #[JsonProperty('itemName')]
    public string $itemName;

    /**
     * @var ?string $itemCode
     */
    #[JsonProperty('itemCode')]
    public ?string $itemCode;

    /**
     * @var string $unitPriceExclVat
     */
    #[JsonProperty('unitPriceExclVat')]
    public string $unitPriceExclVat;

    /**
     * @param array{
     *   itemId: string,
     *   itemName: string,
     *   unitPriceExclVat: string,
     *   itemCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
        $this->itemName = $values['itemName'];
        $this->itemCode = $values['itemCode'] ?? null;
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
