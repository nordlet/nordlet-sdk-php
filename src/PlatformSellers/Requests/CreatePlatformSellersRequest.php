<?php

namespace Nordlet\PlatformSellers\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\PlatformSellers\Types\CreatePlatformSellersRequestKind;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\PlatformSellers\Types\CreatePlatformSellersRequestTaxResidencesItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\PlatformSellers\Types\CreatePlatformSellersRequestAddress;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\PlatformSellers\Types\CreatePlatformSellersRequestActivitiesItem;

class CreatePlatformSellersRequest extends JsonSerializableType
{
    /**
     * @var value-of<CreatePlatformSellersRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

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
     * @var ?array<CreatePlatformSellersRequestTaxResidencesItem> $taxResidences
     */
    #[JsonProperty('taxResidences'), ArrayType([CreatePlatformSellersRequestTaxResidencesItem::class])]
    public ?array $taxResidences;

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
     * @var CreatePlatformSellersRequestAddress $address
     */
    #[JsonProperty('address')]
    public CreatePlatformSellersRequestAddress $address;

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
     * @var ?bool $governmentEntity
     */
    #[JsonProperty('governmentEntity')]
    public ?bool $governmentEntity;

    /**
     * @var ?bool $listedEntity
     */
    #[JsonProperty('listedEntity')]
    public ?bool $listedEntity;

    /**
     * @var ?array<string> $permanentEstablishments
     */
    #[JsonProperty('permanentEstablishments'), ArrayType(['string'])]
    public ?array $permanentEstablishments;

    /**
     * @var ?array<CreatePlatformSellersRequestActivitiesItem> $activities
     */
    #[JsonProperty('activities'), ArrayType([CreatePlatformSellersRequestActivitiesItem::class])]
    public ?array $activities;

    /**
     * @param array{
     *   kind: value-of<CreatePlatformSellersRequestKind>,
     *   address: CreatePlatformSellersRequestAddress,
     *   partnerId?: ?string,
     *   firstName?: ?string,
     *   middleName?: ?string,
     *   lastName?: ?string,
     *   entityName?: ?string,
     *   taxResidences?: ?array<CreatePlatformSellersRequestTaxResidencesItem>,
     *   vatCode?: ?string,
     *   businessRegistrationNumber?: ?string,
     *   birthDate?: ?DateTime,
     *   birthCity?: ?string,
     *   birthCountryCode?: ?string,
     *   iban?: ?string,
     *   accountHolderName?: ?string,
     *   governmentEntity?: ?bool,
     *   listedEntity?: ?bool,
     *   permanentEstablishments?: ?array<string>,
     *   activities?: ?array<CreatePlatformSellersRequestActivitiesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->firstName = $values['firstName'] ?? null;
        $this->middleName = $values['middleName'] ?? null;
        $this->lastName = $values['lastName'] ?? null;
        $this->entityName = $values['entityName'] ?? null;
        $this->taxResidences = $values['taxResidences'] ?? null;
        $this->vatCode = $values['vatCode'] ?? null;
        $this->businessRegistrationNumber = $values['businessRegistrationNumber'] ?? null;
        $this->address = $values['address'];
        $this->birthDate = $values['birthDate'] ?? null;
        $this->birthCity = $values['birthCity'] ?? null;
        $this->birthCountryCode = $values['birthCountryCode'] ?? null;
        $this->iban = $values['iban'] ?? null;
        $this->accountHolderName = $values['accountHolderName'] ?? null;
        $this->governmentEntity = $values['governmentEntity'] ?? null;
        $this->listedEntity = $values['listedEntity'] ?? null;
        $this->permanentEstablishments = $values['permanentEstablishments'] ?? null;
        $this->activities = $values['activities'] ?? null;
    }
}
