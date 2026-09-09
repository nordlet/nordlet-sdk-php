<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Partners\Types\PostV1PartnersFindOrCreateRequestType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1PartnersFindOrCreateRequestAddress;
use Nordlet\Partners\Types\PostV1PartnersFindOrCreateRequestCorrespondenceAddress;
use Nordlet\Partners\Types\PostV1PartnersFindOrCreateRequestLegalCountryClass;

class PostV1PartnersFindOrCreateRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<PostV1PartnersFindOrCreateRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

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
     * @var ?string $birthDate
     */
    #[JsonProperty('birthDate')]
    public ?string $birthDate;

    /**
     * @var ?bool $isCustomer
     */
    #[JsonProperty('isCustomer')]
    public ?bool $isCustomer;

    /**
     * @var ?bool $isSupplier
     */
    #[JsonProperty('isSupplier')]
    public ?bool $isSupplier;

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
     * @var ?PostV1PartnersFindOrCreateRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1PartnersFindOrCreateRequestAddress $address;

    /**
     * @var ?PostV1PartnersFindOrCreateRequestCorrespondenceAddress $correspondenceAddress
     */
    #[JsonProperty('correspondenceAddress')]
    public ?PostV1PartnersFindOrCreateRequestCorrespondenceAddress $correspondenceAddress;

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
     * @var ?bool $autoDebtReminder
     */
    #[JsonProperty('autoDebtReminder')]
    public ?bool $autoDebtReminder;

    /**
     * @var ?string $lateInterestPercent
     */
    #[JsonProperty('lateInterestPercent')]
    public ?string $lateInterestPercent;

    /**
     * @var ?string $firstCallDate
     */
    #[JsonProperty('firstCallDate')]
    public ?string $firstCallDate;

    /**
     * @var ?string $lastCallDate
     */
    #[JsonProperty('lastCallDate')]
    public ?string $lastCallDate;

    /**
     * @var ?string $nextCallDate
     */
    #[JsonProperty('nextCallDate')]
    public ?string $nextCallDate;

    /**
     * @var ?int $rating
     */
    #[JsonProperty('rating')]
    public ?int $rating;

    /**
     * @var ?bool $isEmployee
     */
    #[JsonProperty('isEmployee')]
    public ?bool $isEmployee;

    /**
     * @var ?bool $isGroupMember
     */
    #[JsonProperty('isGroupMember')]
    public ?bool $isGroupMember;

    /**
     * @var ?bool $isActive
     */
    #[JsonProperty('isActive')]
    public ?bool $isActive;

    /**
     * @var ?value-of<PostV1PartnersFindOrCreateRequestLegalCountryClass> $legalCountryClass
     */
    #[JsonProperty('legalCountryClass')]
    public ?string $legalCountryClass;

    /**
     * @param array{
     *   name: string,
     *   type?: ?value-of<PostV1PartnersFindOrCreateRequestType>,
     *   code?: ?string,
     *   vatCode?: ?string,
     *   peppolId?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   selfEmploymentCertNo?: ?string,
     *   birthDate?: ?string,
     *   isCustomer?: ?bool,
     *   isSupplier?: ?bool,
     *   paymentTermDays?: ?int,
     *   creditLimit?: ?string,
     *   priceListId?: ?string,
     *   groupId?: ?string,
     *   statusId?: ?string,
     *   address?: ?PostV1PartnersFindOrCreateRequestAddress,
     *   correspondenceAddress?: ?PostV1PartnersFindOrCreateRequestCorrespondenceAddress,
     *   notes?: ?string,
     *   documentRef?: ?string,
     *   shortName?: ?string,
     *   website?: ?string,
     *   fax?: ?string,
     *   eoriCode?: ?string,
     *   otherCode?: ?string,
     *   foreignTaxNumber?: ?string,
     *   autoDebtReminder?: ?bool,
     *   lateInterestPercent?: ?string,
     *   firstCallDate?: ?string,
     *   lastCallDate?: ?string,
     *   nextCallDate?: ?string,
     *   rating?: ?int,
     *   isEmployee?: ?bool,
     *   isGroupMember?: ?bool,
     *   isActive?: ?bool,
     *   legalCountryClass?: ?value-of<PostV1PartnersFindOrCreateRequestLegalCountryClass>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'] ?? null;
        $this->name = $values['name'];
        $this->code = $values['code'] ?? null;
        $this->vatCode = $values['vatCode'] ?? null;
        $this->peppolId = $values['peppolId'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->selfEmploymentCertNo = $values['selfEmploymentCertNo'] ?? null;
        $this->birthDate = $values['birthDate'] ?? null;
        $this->isCustomer = $values['isCustomer'] ?? null;
        $this->isSupplier = $values['isSupplier'] ?? null;
        $this->paymentTermDays = $values['paymentTermDays'] ?? null;
        $this->creditLimit = $values['creditLimit'] ?? null;
        $this->priceListId = $values['priceListId'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->statusId = $values['statusId'] ?? null;
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
        $this->autoDebtReminder = $values['autoDebtReminder'] ?? null;
        $this->lateInterestPercent = $values['lateInterestPercent'] ?? null;
        $this->firstCallDate = $values['firstCallDate'] ?? null;
        $this->lastCallDate = $values['lastCallDate'] ?? null;
        $this->nextCallDate = $values['nextCallDate'] ?? null;
        $this->rating = $values['rating'] ?? null;
        $this->isEmployee = $values['isEmployee'] ?? null;
        $this->isGroupMember = $values['isGroupMember'] ?? null;
        $this->isActive = $values['isActive'] ?? null;
        $this->legalCountryClass = $values['legalCountryClass'] ?? null;
    }
}
