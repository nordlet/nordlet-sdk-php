<?php

namespace Nordlet\Ecommerce\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;

class PostV1EcommerceProductsListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1EcommerceProductsListResponseRowsItemType> $type
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
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?array<string, ?PostV1EcommerceProductsListResponseRowsItemTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => new Union(PostV1EcommerceProductsListResponseRowsItemTranslationsValue::class, 'null')])]
    public ?array $translations;

    /**
     * @var ?array<string, ?string> $attributes
     */
    #[JsonProperty('attributes'), ArrayType(['string' => new Union('string', 'null')])]
    public ?array $attributes;

    /**
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?string $groupName
     */
    #[JsonProperty('groupName')]
    public ?string $groupName;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

    /**
     * @var ?string $price
     */
    #[JsonProperty('price')]
    public ?string $price;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var array<PostV1EcommerceProductsListResponseRowsItemComponentsItem> $components
     */
    #[JsonProperty('components'), ArrayType([PostV1EcommerceProductsListResponseRowsItemComponentsItem::class])]
    public array $components;

    /**
     * @var ?string $onHand
     */
    #[JsonProperty('onHand')]
    public ?string $onHand;

    /**
     * @var ?string $reserved
     */
    #[JsonProperty('reserved')]
    public ?string $reserved;

    /**
     * @var ?string $available
     */
    #[JsonProperty('available')]
    public ?string $available;

    /**
     * @var bool $deleted
     */
    #[JsonProperty('deleted')]
    public bool $deleted;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   type: value-of<PostV1EcommerceProductsListResponseRowsItemType>,
     *   name: string,
     *   unit: string,
     *   currency: string,
     *   components: array<PostV1EcommerceProductsListResponseRowsItemComponentsItem>,
     *   deleted: bool,
     *   updatedAt: string,
     *   code?: ?string,
     *   barcode?: ?string,
     *   description?: ?string,
     *   translations?: ?array<string, ?PostV1EcommerceProductsListResponseRowsItemTranslationsValue>,
     *   attributes?: ?array<string, ?string>,
     *   groupId?: ?string,
     *   groupName?: ?string,
     *   vatRatePercent?: ?string,
     *   price?: ?string,
     *   onHand?: ?string,
     *   reserved?: ?string,
     *   available?: ?string,
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
        $this->description = $values['description'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->groupName = $values['groupName'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->currency = $values['currency'];
        $this->components = $values['components'];
        $this->onHand = $values['onHand'] ?? null;
        $this->reserved = $values['reserved'] ?? null;
        $this->available = $values['available'] ?? null;
        $this->deleted = $values['deleted'];
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
