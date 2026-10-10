<?php

namespace Nordlet\PlatformSellers\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\PlatformSellers\Types\UpdatePlatformSellersRequestKind;
use Nordlet\PlatformSellers\Types\UpdatePlatformSellersRequestTaxResidencesItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\PlatformSellers\Types\UpdatePlatformSellersRequestAddress;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\PlatformSellers\Types\UpdatePlatformSellersRequestActivitiesItem;

class UpdatePlatformSellersRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<UpdatePlatformSellersRequestKind> $kind
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
     * @var ?array<UpdatePlatformSellersRequestTaxResidencesItem> $taxResidences
     */
    #[JsonProperty('taxResidences'), ArrayType([UpdatePlatformSellersRequestTaxResidencesItem::class])]
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
     * @var UpdatePlatformSellersRequestAddress $address
     */
    #[JsonProperty('address')]
    public UpdatePlatformSellersRequestAddress $address;

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
     * @var ?array<UpdatePlatformSellersRequestActivitiesItem> $activities
     */
    #[JsonProperty('activities'), ArrayType([UpdatePlatformSellersRequestActivitiesItem::class])]
    public ?array $activities;

    /**
     * @param array{
     *   id: string,
     *   kind: value-of<UpdatePlatformSellersRequestKind>,
     *   address: UpdatePlatformSellersRequestAddress,
     *   partnerId?: ?string,
     *   firstName?: ?string,
     *   middleName?: ?string,
     *   lastName?: ?string,
     *   entityName?: ?string,
     *   taxResidences?: ?array<UpdatePlatformSellersRequestTaxResidencesItem>,
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
     *   activities?: ?array<UpdatePlatformSellersRequestActivitiesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
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
