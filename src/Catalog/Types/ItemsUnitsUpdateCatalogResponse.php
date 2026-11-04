<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ItemsUnitsUpdateCatalogResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var ?string $barcode
     */
    #[JsonProperty('barcode')]
    public ?string $barcode;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   itemId: string,
     *   unitCode: string,
     *   factor: string,
     *   isDefaultSale: bool,
     *   isDefaultPurchase: bool,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   barcode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->itemId = $values['itemId'];
        $this->unitCode = $values['unitCode'];
        $this->factor = $values['factor'];
        $this->isDefaultSale = $values['isDefaultSale'];
        $this->isDefaultPurchase = $values['isDefaultPurchase'];
        $this->barcode = $values['barcode'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
