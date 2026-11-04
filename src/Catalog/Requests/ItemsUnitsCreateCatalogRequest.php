<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItemsUnitsCreateCatalogRequest extends JsonSerializableType
{
    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

    /**
     * @var string $unitCode
     */
    #[JsonProperty('unitCode')]
    public string $unitCode;

    /**
     * @var string $factor
     */
    #[JsonProperty('factor')]
    public string $factor;

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
     *   itemId: string,
     *   unitCode: string,
     *   factor: string,
     *   isDefaultSale?: ?bool,
     *   isDefaultPurchase?: ?bool,
     *   barcode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
        $this->unitCode = $values['unitCode'];
        $this->factor = $values['factor'];
        $this->isDefaultSale = $values['isDefaultSale'] ?? null;
        $this->isDefaultPurchase = $values['isDefaultPurchase'] ?? null;
        $this->barcode = $values['barcode'] ?? null;
    }
}
