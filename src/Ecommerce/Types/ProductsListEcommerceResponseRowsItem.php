<?php

namespace Nordlet\Ecommerce\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;
use DateTime;
use Nordlet\Core\Types\Date;

class ProductsListEcommerceResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<ProductsListEcommerceResponseRowsItemType> $type
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
     * @var ?array<string, ?ProductsListEcommerceResponseRowsItemTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => new Union(ProductsListEcommerceResponseRowsItemTranslationsValue::class, 'null')])]
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
     * @var array<ProductsListEcommerceResponseRowsItemComponentsItem> $components
     */
    #[JsonProperty('components'), ArrayType([ProductsListEcommerceResponseRowsItemComponentsItem::class])]
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
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   type: value-of<ProductsListEcommerceResponseRowsItemType>,
     *   name: string,
     *   unit: string,
     *   currency: string,
     *   components: array<ProductsListEcommerceResponseRowsItemComponentsItem>,
     *   deleted: bool,
     *   updatedAt: DateTime,
     *   code?: ?string,
     *   barcode?: ?string,
     *   description?: ?string,
     *   translations?: ?array<string, ?ProductsListEcommerceResponseRowsItemTranslationsValue>,
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
