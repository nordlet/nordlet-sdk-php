<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1HrEmployeesCreateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var ?PostV1HrEmployeesCreateResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1HrEmployeesCreateResponseAddress $address;

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
     * @var ?string $terminationDate
     */
    #[JsonProperty('terminationDate')]
    public ?string $terminationDate;

    /**
     * @var bool $applyAllowance
     */
    #[JsonProperty('applyAllowance')]
    public bool $applyAllowance;

    /**
     * @var ?string $allowanceOverride
     */
    #[JsonProperty('allowanceOverride')]
    public ?string $allowanceOverride;

    /**
     * @var bool $pensionAccumulation
     */
    #[JsonProperty('pensionAccumulation')]
    public bool $pensionAccumulation;

    /**
     * @var array<string, string> $payrollOptions
     */
    #[JsonProperty('payrollOptions'), ArrayType(['string' => 'string'])]
    public array $payrollOptions;

    /**
     * @var value-of<PostV1HrEmployeesCreateResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?array<PostV1HrEmployeesCreateResponseAttributesItem> $attributes
     */
    #[JsonProperty('attributes'), ArrayType([PostV1HrEmployeesCreateResponseAttributesItem::class])]
    public ?array $attributes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   firstName: string,
     *   lastName: string,
     *   applyAllowance: bool,
     *   pensionAccumulation: bool,
     *   payrollOptions: array<string, string>,
     *   status: value-of<PostV1HrEmployeesCreateResponseStatus>,
     *   createdAt: string,
     *   code?: ?string,
     *   personalCode?: ?string,
     *   birthDate?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   address?: ?PostV1HrEmployeesCreateResponseAddress,
     *   iban?: ?string,
     *   socialInsuranceNo?: ?string,
     *   socialInsuranceStart?: ?string,
     *   hireDate?: ?string,
     *   terminationDate?: ?string,
     *   allowanceOverride?: ?string,
     *   notes?: ?string,
     *   attributes?: ?array<PostV1HrEmployeesCreateResponseAttributesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
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
        $this->terminationDate = $values['terminationDate'] ?? null;
        $this->applyAllowance = $values['applyAllowance'];
        $this->allowanceOverride = $values['allowanceOverride'] ?? null;
        $this->pensionAccumulation = $values['pensionAccumulation'];
        $this->payrollOptions = $values['payrollOptions'];
        $this->status = $values['status'];
        $this->notes = $values['notes'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
