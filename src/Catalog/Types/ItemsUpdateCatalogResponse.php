<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;
use DateTime;
use Nordlet\Core\Types\Date;

class ItemsUpdateCatalogResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<ItemsUpdateCatalogResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<ItemsUpdateCatalogResponseTracking> $tracking
     */
    #[JsonProperty('tracking')]
    public string $tracking;

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
     * @var ?string $documentRef
     */
    #[JsonProperty('documentRef')]
    public ?string $documentRef;

    /**
     * @var ?array<string, ?ItemsUpdateCatalogResponseTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => new Union(ItemsUpdateCatalogResponseTranslationsValue::class, 'null')])]
    public ?array $translations;

    /**
     * @var array<ItemsUpdateCatalogResponseComponentsItem> $components
     */
    #[JsonProperty('components'), ArrayType([ItemsUpdateCatalogResponseComponentsItem::class])]
    public array $components;

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
     * @var bool $isFreePrice
     */
    #[JsonProperty('isFreePrice')]
    public bool $isFreePrice;

    /**
     * @var ?string $externalId
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @var bool $isReturnable
     */
    #[JsonProperty('isReturnable')]
    public bool $isReturnable;

    /**
     * @var bool $commentRequired
     */
    #[JsonProperty('commentRequired')]
    public bool $commentRequired;

    /**
     * @var ?string $priceFrom
     */
    #[JsonProperty('priceFrom')]
    public ?string $priceFrom;

    /**
     * @var ?string $priceTo
     */
    #[JsonProperty('priceTo')]
    public ?string $priceTo;

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
     * @var ?string $validFrom
     */
    #[JsonProperty('validFrom')]
    public ?string $validFrom;

    /**
     * @var ?string $validTo
     */
    #[JsonProperty('validTo')]
    public ?string $validTo;

    /**
     * @var ?array<string, ?bool> $posFlags
     */
    #[JsonProperty('posFlags'), ArrayType(['string' => new Union('bool', 'null')])]
    public ?array $posFlags;

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
     *   type: value-of<ItemsUpdateCatalogResponseType>,
     *   tracking: value-of<ItemsUpdateCatalogResponseTracking>,
     *   name: string,
     *   unit: string,
     *   components: array<ItemsUpdateCatalogResponseComponentsItem>,
     *   isFreePrice: bool,
     *   isReturnable: bool,
     *   commentRequired: bool,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
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
     *   documentRef?: ?string,
     *   translations?: ?array<string, ?ItemsUpdateCatalogResponseTranslationsValue>,
     *   kindId?: ?string,
     *   saleAccountCode?: ?string,
     *   purchaseAccountCode?: ?string,
     *   expenseAccountCode?: ?string,
     *   manufacturer?: ?string,
     *   grossMassKg?: ?string,
     *   minQuantity?: ?string,
     *   costPrice?: ?string,
     *   externalId?: ?string,
     *   priceFrom?: ?string,
     *   priceTo?: ?string,
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
     *   validFrom?: ?string,
     *   validTo?: ?string,
     *   posFlags?: ?array<string, ?bool>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->type = $values['type'];
        $this->tracking = $values['tracking'];
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
        $this->documentRef = $values['documentRef'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->components = $values['components'];
        $this->kindId = $values['kindId'] ?? null;
        $this->saleAccountCode = $values['saleAccountCode'] ?? null;
        $this->purchaseAccountCode = $values['purchaseAccountCode'] ?? null;
        $this->expenseAccountCode = $values['expenseAccountCode'] ?? null;
        $this->manufacturer = $values['manufacturer'] ?? null;
        $this->grossMassKg = $values['grossMassKg'] ?? null;
        $this->minQuantity = $values['minQuantity'] ?? null;
        $this->costPrice = $values['costPrice'] ?? null;
        $this->isFreePrice = $values['isFreePrice'];
        $this->externalId = $values['externalId'] ?? null;
        $this->isReturnable = $values['isReturnable'];
        $this->commentRequired = $values['commentRequired'];
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
