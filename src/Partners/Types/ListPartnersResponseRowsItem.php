<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ListPartnersResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<ListPartnersResponseRowsItemType> $type
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
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @var ?string $peppolId
     */
    #[JsonProperty('peppolId')]
    public ?string $peppolId;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $selfEmploymentCertNo
     */
    #[JsonProperty('selfEmploymentCertNo')]
    public ?string $selfEmploymentCertNo;

    /**
     * @var ?DateTime $birthDate
     */
    #[JsonProperty('birthDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $birthDate;

    /**
     * @var bool $isCustomer
     */
    #[JsonProperty('isCustomer')]
    public bool $isCustomer;

    /**
     * @var bool $isSupplier
     */
    #[JsonProperty('isSupplier')]
    public bool $isSupplier;

    /**
     * @var ?int $paymentTermDays
     */
    #[JsonProperty('paymentTermDays')]
    public ?int $paymentTermDays;

    /**
     * @var ?string $creditLimit
     */
    #[JsonProperty('creditLimit')]
    public ?string $creditLimit;

    /**
     * @var ?string $priceListId
     */
    #[JsonProperty('priceListId')]
    public ?string $priceListId;

    /**
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?string $statusId
     */
    #[JsonProperty('statusId')]
    public ?string $statusId;

    /**
     * @var ?bool $vatValid
     */
    #[JsonProperty('vatValid')]
    public ?bool $vatValid;

    /**
     * @var ?DateTime $vatValidatedAt
     */
    #[JsonProperty('vatValidatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $vatValidatedAt;

    /**
     * @var ?ListPartnersResponseRowsItemAddress $address
     */
    #[JsonProperty('address')]
    public ?ListPartnersResponseRowsItemAddress $address;

    /**
     * @var ?ListPartnersResponseRowsItemCorrespondenceAddress $correspondenceAddress
     */
    #[JsonProperty('correspondenceAddress')]
    public ?ListPartnersResponseRowsItemCorrespondenceAddress $correspondenceAddress;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?string $documentRef
     */
    #[JsonProperty('documentRef')]
    public ?string $documentRef;

    /**
     * @var ?string $shortName
     */
    #[JsonProperty('shortName')]
    public ?string $shortName;

    /**
     * @var ?string $website
     */
    #[JsonProperty('website')]
    public ?string $website;

    /**
     * @var ?string $fax
     */
    #[JsonProperty('fax')]
    public ?string $fax;

    /**
     * @var ?string $eoriCode
     */
    #[JsonProperty('eoriCode')]
    public ?string $eoriCode;

    /**
     * @var ?string $otherCode
     */
    #[JsonProperty('otherCode')]
    public ?string $otherCode;

    /**
     * @var ?string $foreignTaxNumber
     */
    #[JsonProperty('foreignTaxNumber')]
    public ?string $foreignTaxNumber;

    /**
     * @var bool $autoDebtReminder
     */
    #[JsonProperty('autoDebtReminder')]
    public bool $autoDebtReminder;

    /**
     * @var ?string $lateInterestPercent
     */
    #[JsonProperty('lateInterestPercent')]
    public ?string $lateInterestPercent;

    /**
     * @var ?DateTime $firstCallDate
     */
    #[JsonProperty('firstCallDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $firstCallDate;

    /**
     * @var ?DateTime $lastCallDate
     */
    #[JsonProperty('lastCallDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $lastCallDate;

    /**
     * @var ?DateTime $nextCallDate
     */
    #[JsonProperty('nextCallDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $nextCallDate;

    /**
     * @var ?int $rating
     */
    #[JsonProperty('rating')]
    public ?int $rating;

    /**
     * @var bool $isEmployee
     */
    #[JsonProperty('isEmployee')]
    public bool $isEmployee;

    /**
     * @var bool $isGroupMember
     */
    #[JsonProperty('isGroupMember')]
    public bool $isGroupMember;

    /**
     * @var bool $isActive
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

    /**
     * @var ?value-of<ListPartnersResponseRowsItemLegalCountryClass> $legalCountryClass
     */
    #[JsonProperty('legalCountryClass')]
    public ?string $legalCountryClass;

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
     *   type: value-of<ListPartnersResponseRowsItemType>,
     *   name: string,
     *   isCustomer: bool,
     *   isSupplier: bool,
     *   autoDebtReminder: bool,
     *   isEmployee: bool,
     *   isGroupMember: bool,
     *   isActive: bool,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   code?: ?string,
     *   vatCode?: ?string,
     *   peppolId?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   selfEmploymentCertNo?: ?string,
     *   birthDate?: ?DateTime,
     *   paymentTermDays?: ?int,
     *   creditLimit?: ?string,
     *   priceListId?: ?string,
     *   groupId?: ?string,
     *   statusId?: ?string,
     *   vatValid?: ?bool,
     *   vatValidatedAt?: ?DateTime,
     *   address?: ?ListPartnersResponseRowsItemAddress,
     *   correspondenceAddress?: ?ListPartnersResponseRowsItemCorrespondenceAddress,
     *   notes?: ?string,
     *   documentRef?: ?string,
     *   shortName?: ?string,
     *   website?: ?string,
     *   fax?: ?string,
     *   eoriCode?: ?string,
     *   otherCode?: ?string,
     *   foreignTaxNumber?: ?string,
     *   lateInterestPercent?: ?string,
     *   firstCallDate?: ?DateTime,
     *   lastCallDate?: ?DateTime,
     *   nextCallDate?: ?DateTime,
     *   rating?: ?int,
     *   legalCountryClass?: ?value-of<ListPartnersResponseRowsItemLegalCountryClass>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->type = $values['type'];
        $this->name = $values['name'];
        $this->code = $values['code'] ?? null;
        $this->vatCode = $values['vatCode'] ?? null;
        $this->peppolId = $values['peppolId'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->selfEmploymentCertNo = $values['selfEmploymentCertNo'] ?? null;
        $this->birthDate = $values['birthDate'] ?? null;
        $this->isCustomer = $values['isCustomer'];
        $this->isSupplier = $values['isSupplier'];
        $this->paymentTermDays = $values['paymentTermDays'] ?? null;
        $this->creditLimit = $values['creditLimit'] ?? null;
        $this->priceListId = $values['priceListId'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->statusId = $values['statusId'] ?? null;
        $this->vatValid = $values['vatValid'] ?? null;
        $this->vatValidatedAt = $values['vatValidatedAt'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->correspondenceAddress = $values['correspondenceAddress'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
        $this->shortName = $values['shortName'] ?? null;
        $this->website = $values['website'] ?? null;
        $this->fax = $values['fax'] ?? null;
        $this->eoriCode = $values['eoriCode'] ?? null;
        $this->otherCode = $values['otherCode'] ?? null;
        $this->foreignTaxNumber = $values['foreignTaxNumber'] ?? null;
        $this->autoDebtReminder = $values['autoDebtReminder'];
        $this->lateInterestPercent = $values['lateInterestPercent'] ?? null;
        $this->firstCallDate = $values['firstCallDate'] ?? null;
        $this->lastCallDate = $values['lastCallDate'] ?? null;
        $this->nextCallDate = $values['nextCallDate'] ?? null;
        $this->rating = $values['rating'] ?? null;
        $this->isEmployee = $values['isEmployee'];
        $this->isGroupMember = $values['isGroupMember'];
        $this->isActive = $values['isActive'];
        $this->legalCountryClass = $values['legalCountryClass'] ?? null;
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
