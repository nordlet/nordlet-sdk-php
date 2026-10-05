<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Catalog\Types\ItemsCreateCatalogRequestType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Catalog\Types\ItemsCreateCatalogRequestTracking;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Catalog\Types\ItemsCreateCatalogRequestTranslationsValue;
use Nordlet\Catalog\Types\ItemsCreateCatalogRequestComponentsItem;
use DateTime;
use Nordlet\Core\Types\Date;

class ItemsCreateCatalogRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<ItemsCreateCatalogRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?value-of<ItemsCreateCatalogRequestTracking> $tracking
     */
    #[JsonProperty('tracking')]
    public ?string $tracking;

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
     * @var ?string $documentRef
     */
    #[JsonProperty('documentRef')]
    public ?string $documentRef;

    /**
     * @var ?array<string, ItemsCreateCatalogRequestTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => ItemsCreateCatalogRequestTranslationsValue::class])]
    public ?array $translations;

    /**
     * @var ?array<ItemsCreateCatalogRequestComponentsItem> $components
     */
    #[JsonProperty('components'), ArrayType([ItemsCreateCatalogRequestComponentsItem::class])]
    public ?array $components;

    /**
     * @var ?string $kindId
     */
    #[JsonProperty('kindId')]
    public ?string $kindId;

    /**
     * @var ?string $saleAccountCode
     */
    #[JsonProperty('saleAccountCode')]
    public ?string $saleAccountCode;

    /**
     * @var ?string $purchaseAccountCode
     */
    #[JsonProperty('purchaseAccountCode')]
    public ?string $purchaseAccountCode;

    /**
     * @var ?string $expenseAccountCode
     */
    #[JsonProperty('expenseAccountCode')]
    public ?string $expenseAccountCode;

    /**
     * @var ?string $manufacturer
     */
    #[JsonProperty('manufacturer')]
    public ?string $manufacturer;

    /**
     * @var ?string $grossMassKg
     */
    #[JsonProperty('grossMassKg')]
    public ?string $grossMassKg;

    /**
     * @var ?string $minQuantity
     */
    #[JsonProperty('minQuantity')]
    public ?string $minQuantity;

    /**
     * @var ?string $costPrice
     */
    #[JsonProperty('costPrice')]
    public ?string $costPrice;

    /**
     * @var ?bool $isFreePrice
     */
    #[JsonProperty('isFreePrice')]
    public ?bool $isFreePrice;

    /**
     * @var ?string $externalId
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @var ?bool $isReturnable
     */
    #[JsonProperty('isReturnable')]
    public ?bool $isReturnable;

    /**
     * @var ?bool $commentRequired
     */
    #[JsonProperty('commentRequired')]
    public ?bool $commentRequired;

    /**
     * @var ?DateTime $priceFrom
     */
    #[JsonProperty('priceFrom'), Date(Date::TYPE_DATE)]
    public ?DateTime $priceFrom;

    /**
     * @var ?DateTime $priceTo
     */
    #[JsonProperty('priceTo'), Date(Date::TYPE_DATE)]
    public ?DateTime $priceTo;

    /**
     * @var ?string $minPrice
     */
    #[JsonProperty('minPrice')]
    public ?string $minPrice;

    /**
     * @var ?string $discountPercent
     */
    #[JsonProperty('discountPercent')]
    public ?string $discountPercent;

    /**
     * @var ?string $maxDiscountPercent
     */
    #[JsonProperty('maxDiscountPercent')]
    public ?string $maxDiscountPercent;

    /**
     * @var ?int $loyaltyPoints
     */
    #[JsonProperty('loyaltyPoints')]
    public ?int $loyaltyPoints;

    /**
     * @var ?string $department
     */
    #[JsonProperty('department')]
    public ?string $department;

    /**
     * @var ?int $ageRestriction
     */
    #[JsonProperty('ageRestriction')]
    public ?int $ageRestriction;

    /**
     * @var ?string $packageQuantity
     */
    #[JsonProperty('packageQuantity')]
    public ?string $packageQuantity;

    /**
     * @var ?string $taraCode
     */
    #[JsonProperty('taraCode')]
    public ?string $taraCode;

    /**
     * @var ?string $certificateNumber
     */
    #[JsonProperty('certificateNumber')]
    public ?string $certificateNumber;

    /**
     * @var ?DateTime $certificateDate
     */
    #[JsonProperty('certificateDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $certificateDate;

    /**
     * @var ?DateTime $validFrom
     */
    #[JsonProperty('validFrom'), Date(Date::TYPE_DATE)]
    public ?DateTime $validFrom;

    /**
     * @var ?DateTime $validTo
     */
    #[JsonProperty('validTo'), Date(Date::TYPE_DATE)]
    public ?DateTime $validTo;

    /**
     * @var ?array<string, bool> $posFlags
     */
    #[JsonProperty('posFlags'), ArrayType(['string' => 'bool'])]
    public ?array $posFlags;

    /**
     * @param array{
     *   name: string,
     *   type?: ?value-of<ItemsCreateCatalogRequestType>,
     *   tracking?: ?value-of<ItemsCreateCatalogRequestTracking>,
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
     *   documentRef?: ?string,
     *   translations?: ?array<string, ItemsCreateCatalogRequestTranslationsValue>,
     *   components?: ?array<ItemsCreateCatalogRequestComponentsItem>,
     *   kindId?: ?string,
     *   saleAccountCode?: ?string,
     *   purchaseAccountCode?: ?string,
     *   expenseAccountCode?: ?string,
     *   manufacturer?: ?string,
     *   grossMassKg?: ?string,
     *   minQuantity?: ?string,
     *   costPrice?: ?string,
     *   isFreePrice?: ?bool,
     *   externalId?: ?string,
     *   isReturnable?: ?bool,
     *   commentRequired?: ?bool,
     *   priceFrom?: ?DateTime,
     *   priceTo?: ?DateTime,
     *   minPrice?: ?string,
     *   discountPercent?: ?string,
     *   maxDiscountPercent?: ?string,
     *   loyaltyPoints?: ?int,
     *   department?: ?string,
     *   ageRestriction?: ?int,
     *   packageQuantity?: ?string,
     *   taraCode?: ?string,
     *   certificateNumber?: ?string,
     *   certificateDate?: ?DateTime,
     *   validFrom?: ?DateTime,
     *   validTo?: ?DateTime,
     *   posFlags?: ?array<string, bool>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'] ?? null;
        $this->tracking = $values['tracking'] ?? null;
        $this->name = $values['name'];
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
        $this->documentRef = $values['documentRef'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->components = $values['components'] ?? null;
        $this->kindId = $values['kindId'] ?? null;
        $this->saleAccountCode = $values['saleAccountCode'] ?? null;
        $this->purchaseAccountCode = $values['purchaseAccountCode'] ?? null;
        $this->expenseAccountCode = $values['expenseAccountCode'] ?? null;
        $this->manufacturer = $values['manufacturer'] ?? null;
        $this->grossMassKg = $values['grossMassKg'] ?? null;
        $this->minQuantity = $values['minQuantity'] ?? null;
        $this->costPrice = $values['costPrice'] ?? null;
        $this->isFreePrice = $values['isFreePrice'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
        $this->isReturnable = $values['isReturnable'] ?? null;
        $this->commentRequired = $values['commentRequired'] ?? null;
        $this->priceFrom = $values['priceFrom'] ?? null;
        $this->priceTo = $values['priceTo'] ?? null;
        $this->minPrice = $values['minPrice'] ?? null;
        $this->discountPercent = $values['discountPercent'] ?? null;
        $this->maxDiscountPercent = $values['maxDiscountPercent'] ?? null;
        $this->loyaltyPoints = $values['loyaltyPoints'] ?? null;
        $this->department = $values['department'] ?? null;
        $this->ageRestriction = $values['ageRestriction'] ?? null;
        $this->packageQuantity = $values['packageQuantity'] ?? null;
        $this->taraCode = $values['taraCode'] ?? null;
        $this->certificateNumber = $values['certificateNumber'] ?? null;
        $this->certificateDate = $values['certificateDate'] ?? null;
        $this->validFrom = $values['validFrom'] ?? null;
        $this->validTo = $values['validTo'] ?? null;
        $this->posFlags = $values['posFlags'] ?? null;
    }
}
