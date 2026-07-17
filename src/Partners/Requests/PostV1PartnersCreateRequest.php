<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Partners\Types\PostV1PartnersCreateRequestType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1PartnersCreateRequestAddress;

class PostV1PartnersCreateRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<PostV1PartnersCreateRequestType> $type
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
     * @var ?PostV1PartnersCreateRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1PartnersCreateRequestAddress $address;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   name: string,
     *   type?: ?value-of<PostV1PartnersCreateRequestType>,
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
     *   address?: ?PostV1PartnersCreateRequestAddress,
     *   notes?: ?string,
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
        $this->notes = $values['notes'] ?? null;
    }
}
