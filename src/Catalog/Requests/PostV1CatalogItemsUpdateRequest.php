<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Catalog\Types\PostV1CatalogItemsUpdateRequestType;
use Nordlet\Catalog\Types\PostV1CatalogItemsUpdateRequestTracking;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Catalog\Types\PostV1CatalogItemsUpdateRequestTranslationsValue;
use Nordlet\Catalog\Types\PostV1CatalogItemsUpdateRequestComponentsItem;

class PostV1CatalogItemsUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?value-of<PostV1CatalogItemsUpdateRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?value-of<PostV1CatalogItemsUpdateRequestTracking> $tracking
     */
    #[JsonProperty('tracking')]
    public ?string $tracking;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

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
     * @var ?string $unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

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
     * @var ?array<string, string> $attributes
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'string'])]
    public ?array $attributes;

    /**
     * @var ?array<string, PostV1CatalogItemsUpdateRequestTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => PostV1CatalogItemsUpdateRequestTranslationsValue::class])]
    public ?array $translations;

    /**
     * @var ?array<PostV1CatalogItemsUpdateRequestComponentsItem> $components
     */
    #[JsonProperty('components'), ArrayType([PostV1CatalogItemsUpdateRequestComponentsItem::class])]
    public ?array $components;

    /**
     * @param array{
     *   id: string,
     *   type?: ?value-of<PostV1CatalogItemsUpdateRequestType>,
     *   tracking?: ?value-of<PostV1CatalogItemsUpdateRequestTracking>,
     *   name?: ?string,
     *   code?: ?string,
     *   barcode?: ?string,
     *   unit?: ?string,
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
     *   attributes?: ?array<string, string>,
     *   translations?: ?array<string, PostV1CatalogItemsUpdateRequestTranslationsValue>,
     *   components?: ?array<PostV1CatalogItemsUpdateRequestComponentsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->type = $values['type'] ?? null;
        $this->tracking = $values['tracking'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->barcode = $values['barcode'] ?? null;
        $this->unit = $values['unit'] ?? null;
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
        $this->components = $values['components'] ?? null;
    }
}
