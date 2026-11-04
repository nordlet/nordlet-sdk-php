<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItemsUnitsUpdateCatalogRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $factor
     */
    #[JsonProperty('factor')]
    public ?string $factor;

    /**
     * @var ?bool $isDefaultSale
     */
    #[JsonProperty('isDefaultSale')]
    public ?bool $isDefaultSale;

    /**
     * @var ?bool $isDefaultPurchase
     */
    #[JsonProperty('isDefaultPurchase')]
    public ?bool $isDefaultPurchase;

    /**
     * @var ?string $barcode
     */
    #[JsonProperty('barcode')]
    public ?string $barcode;

    /**
     * @param array{
     *   id: string,
     *   factor?: ?string,
     *   isDefaultSale?: ?bool,
     *   isDefaultPurchase?: ?bool,
     *   barcode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->factor = $values['factor'] ?? null;
        $this->isDefaultSale = $values['isDefaultSale'] ?? null;
        $this->isDefaultPurchase = $values['isDefaultPurchase'] ?? null;
        $this->barcode = $values['barcode'] ?? null;
    }
}
