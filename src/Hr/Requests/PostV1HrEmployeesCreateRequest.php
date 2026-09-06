<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PostV1HrEmployeesCreateRequestAddress;
use Nordlet\Hr\Types\PostV1HrEmployeesCreateRequestAttributesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1HrEmployeesCreateRequest extends JsonSerializableType
{
    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var string $firstName
     */
    #[JsonProperty('firstName')]
    public string $firstName;

    /**
     * @var string $lastName
     */
    #[JsonProperty('lastName')]
    public string $lastName;

    /**
     * @var ?string $personalCode
     */
    #[JsonProperty('personalCode')]
    public ?string $personalCode;

    /**
     * @var ?string $birthDate
     */
    #[JsonProperty('birthDate')]
    public ?string $birthDate;

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
     * @var ?PostV1HrEmployeesCreateRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1HrEmployeesCreateRequestAddress $address;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $socialInsuranceNo
     */
    #[JsonProperty('socialInsuranceNo')]
    public ?string $socialInsuranceNo;

    /**
     * @var ?string $socialInsuranceStart
     */
    #[JsonProperty('socialInsuranceStart')]
    public ?string $socialInsuranceStart;

    /**
     * @var ?string $hireDate
     */
    #[JsonProperty('hireDate')]
    public ?string $hireDate;

    /**
     * @var ?bool $applyNpd
     */
    #[JsonProperty('applyNpd')]
    public ?bool $applyNpd;

    /**
     * @var ?string $npdOverride
     */
    #[JsonProperty('npdOverride')]
    public ?string $npdOverride;

    /**
     * @var ?bool $pensionAccumulation
     */
    #[JsonProperty('pensionAccumulation')]
    public ?bool $pensionAccumulation;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?array<PostV1HrEmployeesCreateRequestAttributesItem> $attributes
     */
    #[JsonProperty('attributes'), ArrayType([PostV1HrEmployeesCreateRequestAttributesItem::class])]
    public ?array $attributes;

    /**
     * @param array{
     *   firstName: string,
     *   lastName: string,
     *   code?: ?string,
     *   personalCode?: ?string,
     *   birthDate?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   address?: ?PostV1HrEmployeesCreateRequestAddress,
     *   iban?: ?string,
     *   socialInsuranceNo?: ?string,
     *   socialInsuranceStart?: ?string,
     *   hireDate?: ?string,
     *   applyNpd?: ?bool,
     *   npdOverride?: ?string,
     *   pensionAccumulation?: ?bool,
     *   notes?: ?string,
     *   attributes?: ?array<PostV1HrEmployeesCreateRequestAttributesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'] ?? null;
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
        $this->personalCode = $values['personalCode'] ?? null;
        $this->birthDate = $values['birthDate'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->iban = $values['iban'] ?? null;
        $this->socialInsuranceNo = $values['socialInsuranceNo'] ?? null;
        $this->socialInsuranceStart = $values['socialInsuranceStart'] ?? null;
        $this->hireDate = $values['hireDate'] ?? null;
        $this->applyNpd = $values['applyNpd'] ?? null;
        $this->npdOverride = $values['npdOverride'] ?? null;
        $this->pensionAccumulation = $values['pensionAccumulation'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
    }
}
