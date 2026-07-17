<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;

class PostV1CatalogItemsListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1CatalogItemsListResponseRowsItemType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $barcode
     */
    #[JsonProperty('barcode')]
    public ?string $barcode;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?string $vatClassifierCode
     */
    #[JsonProperty('vatClassifierCode')]
    public ?string $vatClassifierCode;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

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
     * @var ?string $cnCode
     */
    #[JsonProperty('cnCode')]
    public ?string $cnCode;

    /**
     * @var ?string $originCountry
     */
    #[JsonProperty('originCountry')]
    public ?string $originCountry;

    /**
     * @var ?string $netMassKg
     */
    #[JsonProperty('netMassKg')]
    public ?string $netMassKg;

    /**
     * @var ?string $supplementaryUnit
     */
    #[JsonProperty('supplementaryUnit')]
    public ?string $supplementaryUnit;

    /**
     * @var ?string $supplementaryQtyPerUnit
     */
    #[JsonProperty('supplementaryQtyPerUnit')]
    public ?string $supplementaryQtyPerUnit;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?array<string, ?string> $attributes
     */
    #[JsonProperty('attributes'), ArrayType(['string' => new Union('string', 'null')])]
    public ?array $attributes;

    /**
     * @var ?array<string, ?PostV1CatalogItemsListResponseRowsItemTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => new Union(PostV1CatalogItemsListResponseRowsItemTranslationsValue::class, 'null')])]
    public ?array $translations;

    /**
     * @var array<PostV1CatalogItemsListResponseRowsItemComponentsItem> $components
     */
    #[JsonProperty('components'), ArrayType([PostV1CatalogItemsListResponseRowsItemComponentsItem::class])]
    public array $components;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   type: value-of<PostV1CatalogItemsListResponseRowsItemType>,
     *   name: string,
     *   unit: string,
     *   components: array<PostV1CatalogItemsListResponseRowsItemComponentsItem>,
     *   createdAt: string,
     *   updatedAt: string,
     *   code?: ?string,
     *   barcode?: ?string,
     *   vatClassifierCode?: ?string,
     *   vatRatePercent?: ?string,
     *   salePriceExclVat?: ?string,
     *   purchasePriceExclVat?: ?string,
     *   cnCode?: ?string,
     *   originCountry?: ?string,
     *   netMassKg?: ?string,
     *   supplementaryUnit?: ?string,
     *   supplementaryQtyPerUnit?: ?string,
     *   description?: ?string,
     *   groupId?: ?string,
     *   attributes?: ?array<string, ?string>,
     *   translations?: ?array<string, ?PostV1CatalogItemsListResponseRowsItemTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->type = $values['type'];
        $this->name = $values['name'];
        $this->code = $values['code'] ?? null;
        $this->barcode = $values['barcode'] ?? null;
        $this->unit = $values['unit'];
        $this->vatClassifierCode = $values['vatClassifierCode'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'] ?? null;
        $this->salePriceExclVat = $values['salePriceExclVat'] ?? null;
        $this->purchasePriceExclVat = $values['purchasePriceExclVat'] ?? null;
        $this->cnCode = $values['cnCode'] ?? null;
        $this->originCountry = $values['originCountry'] ?? null;
        $this->netMassKg = $values['netMassKg'] ?? null;
        $this->supplementaryUnit = $values['supplementaryUnit'] ?? null;
        $this->supplementaryQtyPerUnit = $values['supplementaryQtyPerUnit'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->components = $values['components'];
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
