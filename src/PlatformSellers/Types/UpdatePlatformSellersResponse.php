<?php

namespace Nordlet\PlatformSellers\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class UpdatePlatformSellersResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<UpdatePlatformSellersResponseKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $firstName
     */
    #[JsonProperty('firstName')]
    public ?string $firstName;

    /**
     * @var ?string $middleName
     */
    #[JsonProperty('middleName')]
    public ?string $middleName;

    /**
     * @var ?string $lastName
     */
    #[JsonProperty('lastName')]
    public ?string $lastName;

    /**
     * @var ?string $entityName
     */
    #[JsonProperty('entityName')]
    public ?string $entityName;

    /**
     * @var array<UpdatePlatformSellersResponseTaxResidencesItem> $taxResidences
     */
    #[JsonProperty('taxResidences'), ArrayType([UpdatePlatformSellersResponseTaxResidencesItem::class])]
    public array $taxResidences;

    /**
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @var ?string $businessRegistrationNumber
     */
    #[JsonProperty('businessRegistrationNumber')]
    public ?string $businessRegistrationNumber;

    /**
     * @var UpdatePlatformSellersResponseAddress $address
     */
    #[JsonProperty('address')]
    public UpdatePlatformSellersResponseAddress $address;

    /**
     * @var ?DateTime $birthDate
     */
    #[JsonProperty('birthDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $birthDate;

    /**
     * @var ?string $birthCity
     */
    #[JsonProperty('birthCity')]
    public ?string $birthCity;

    /**
     * @var ?string $birthCountryCode
     */
    #[JsonProperty('birthCountryCode')]
    public ?string $birthCountryCode;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $accountHolderName
     */
    #[JsonProperty('accountHolderName')]
    public ?string $accountHolderName;

    /**
     * @var bool $governmentEntity
     */
    #[JsonProperty('governmentEntity')]
    public bool $governmentEntity;

    /**
     * @var bool $listedEntity
     */
    #[JsonProperty('listedEntity')]
    public bool $listedEntity;

    /**
     * @var array<string> $permanentEstablishments
     */
    #[JsonProperty('permanentEstablishments'), ArrayType(['string'])]
    public array $permanentEstablishments;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var array<UpdatePlatformSellersResponseActivitiesItem> $activities
     */
    #[JsonProperty('activities'), ArrayType([UpdatePlatformSellersResponseActivitiesItem::class])]
    public array $activities;

    /**
     * @param array{
     *   id: string,
     *   kind: value-of<UpdatePlatformSellersResponseKind>,
     *   name: string,
     *   taxResidences: array<UpdatePlatformSellersResponseTaxResidencesItem>,
     *   address: UpdatePlatformSellersResponseAddress,
     *   governmentEntity: bool,
     *   listedEntity: bool,
     *   permanentEstablishments: array<string>,
     *   createdAt: DateTime,
     *   activities: array<UpdatePlatformSellersResponseActivitiesItem>,
     *   partnerId?: ?string,
     *   firstName?: ?string,
     *   middleName?: ?string,
     *   lastName?: ?string,
     *   entityName?: ?string,
     *   vatCode?: ?string,
     *   businessRegistrationNumber?: ?string,
     *   birthDate?: ?DateTime,
     *   birthCity?: ?string,
     *   birthCountryCode?: ?string,
     *   iban?: ?string,
     *   accountHolderName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->kind = $values['kind'];
        $this->name = $values['name'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->firstName = $values['firstName'] ?? null;
        $this->middleName = $values['middleName'] ?? null;
        $this->lastName = $values['lastName'] ?? null;
        $this->entityName = $values['entityName'] ?? null;
        $this->taxResidences = $values['taxResidences'];
        $this->vatCode = $values['vatCode'] ?? null;
        $this->businessRegistrationNumber = $values['businessRegistrationNumber'] ?? null;
        $this->address = $values['address'];
        $this->birthDate = $values['birthDate'] ?? null;
        $this->birthCity = $values['birthCity'] ?? null;
        $this->birthCountryCode = $values['birthCountryCode'] ?? null;
        $this->iban = $values['iban'] ?? null;
        $this->accountHolderName = $values['accountHolderName'] ?? null;
        $this->governmentEntity = $values['governmentEntity'];
        $this->listedEntity = $values['listedEntity'];
        $this->permanentEstablishments = $values['permanentEstablishments'];
        $this->createdAt = $values['createdAt'];
        $this->activities = $values['activities'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
