<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class EmployeesGetHrResponse extends JsonSerializableType
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
     * @var ?DateTime $birthDate
     */
    #[JsonProperty('birthDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $birthDate;

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
     * @var ?EmployeesGetHrResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?EmployeesGetHrResponseAddress $address;

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
     * @var ?DateTime $hireDate
     */
    #[JsonProperty('hireDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $hireDate;

    /**
     * @var ?DateTime $terminationDate
     */
    #[JsonProperty('terminationDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $terminationDate;

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
     * @var value-of<EmployeesGetHrResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?array<EmployeesGetHrResponseAttributesItem> $attributes
     */
    #[JsonProperty('attributes'), ArrayType([EmployeesGetHrResponseAttributesItem::class])]
    public ?array $attributes;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   firstName: string,
     *   lastName: string,
     *   applyAllowance: bool,
     *   pensionAccumulation: bool,
     *   payrollOptions: array<string, string>,
     *   status: value-of<EmployeesGetHrResponseStatus>,
     *   createdAt: DateTime,
     *   code?: ?string,
     *   personalCode?: ?string,
     *   birthDate?: ?DateTime,
     *   email?: ?string,
     *   phone?: ?string,
     *   address?: ?EmployeesGetHrResponseAddress,
     *   iban?: ?string,
     *   socialInsuranceNo?: ?string,
     *   socialInsuranceStart?: ?string,
     *   hireDate?: ?DateTime,
     *   terminationDate?: ?DateTime,
     *   allowanceOverride?: ?string,
     *   notes?: ?string,
     *   attributes?: ?array<EmployeesGetHrResponseAttributesItem>,
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
