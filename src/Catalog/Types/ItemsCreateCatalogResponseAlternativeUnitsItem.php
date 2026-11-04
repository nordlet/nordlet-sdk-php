<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItemsCreateCatalogResponseAlternativeUnitsItem extends JsonSerializableType
{
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
     * @var bool $isDefaultSale
     */
    #[JsonProperty('isDefaultSale')]
    public bool $isDefaultSale;

    /**
     * @var bool $isDefaultPurchase
     */
    #[JsonProperty('isDefaultPurchase')]
    public bool $isDefaultPurchase;

    /**
     * @var ?string $salePriceExclVat
     */
    #[JsonProperty('salePriceExclVat')]
    public ?string $salePriceExclVat;

    /**
     * @var ?string $purchasePriceExclVat
     */
    #[JsonProperty('purchasePriceExclVat')]
    public ?string $purchasePriceExclVat;

    /**
     * @param array{
     *   unitCode: string,
     *   factor: string,
     *   isDefaultSale: bool,
     *   isDefaultPurchase: bool,
     *   salePriceExclVat?: ?string,
     *   purchasePriceExclVat?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->unitCode = $values['unitCode'];
        $this->factor = $values['factor'];
        $this->isDefaultSale = $values['isDefaultSale'];
        $this->isDefaultPurchase = $values['isDefaultPurchase'];
        $this->salePriceExclVat = $values['salePriceExclVat'] ?? null;
        $this->purchasePriceExclVat = $values['purchasePriceExclVat'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
