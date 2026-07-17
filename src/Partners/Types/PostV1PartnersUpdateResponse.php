<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersUpdateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1PartnersUpdateResponseType> $type
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
     * @var ?string $birthDate
     */
    #[JsonProperty('birthDate')]
    public ?string $birthDate;

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
     * @var ?string $vatValidatedAt
     */
    #[JsonProperty('vatValidatedAt')]
    public ?string $vatValidatedAt;

    /**
     * @var ?PostV1PartnersUpdateResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1PartnersUpdateResponseAddress $address;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   type: value-of<PostV1PartnersUpdateResponseType>,
     *   name: string,
     *   isCustomer: bool,
     *   isSupplier: bool,
     *   createdAt: string,
     *   updatedAt: string,
     *   code?: ?string,
     *   vatCode?: ?string,
     *   peppolId?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   selfEmploymentCertNo?: ?string,
     *   birthDate?: ?string,
     *   paymentTermDays?: ?int,
     *   creditLimit?: ?string,
     *   priceListId?: ?string,
     *   groupId?: ?string,
     *   statusId?: ?string,
     *   vatValid?: ?bool,
     *   vatValidatedAt?: ?string,
     *   address?: ?PostV1PartnersUpdateResponseAddress,
     *   notes?: ?string,
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
        $this->notes = $values['notes'] ?? null;
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
