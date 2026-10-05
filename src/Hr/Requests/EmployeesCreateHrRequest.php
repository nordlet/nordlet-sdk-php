<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Hr\Types\EmployeesCreateHrRequestAddress;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Hr\Types\EmployeesCreateHrRequestAttributesItem;

class EmployeesCreateHrRequest extends JsonSerializableType
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
     * @var ?EmployeesCreateHrRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?EmployeesCreateHrRequestAddress $address;

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
     * @var ?DateTime $socialInsuranceStart
     */
    #[JsonProperty('socialInsuranceStart'), Date(Date::TYPE_DATE)]
    public ?DateTime $socialInsuranceStart;

    /**
     * @var ?DateTime $hireDate
     */
    #[JsonProperty('hireDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $hireDate;

    /**
     * @var ?bool $applyAllowance
     */
    #[JsonProperty('applyAllowance')]
    public ?bool $applyAllowance;

    /**
     * @var ?string $allowanceOverride
     */
    #[JsonProperty('allowanceOverride')]
    public ?string $allowanceOverride;

    /**
     * @var ?bool $pensionAccumulation
     */
    #[JsonProperty('pensionAccumulation')]
    public ?bool $pensionAccumulation;

    /**
     * @var ?array<string, string> $payrollOptions
     */
    #[JsonProperty('payrollOptions'), ArrayType(['string' => 'string'])]
    public ?array $payrollOptions;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?array<EmployeesCreateHrRequestAttributesItem> $attributes
     */
    #[JsonProperty('attributes'), ArrayType([EmployeesCreateHrRequestAttributesItem::class])]
    public ?array $attributes;

    /**
     * @param array{
     *   firstName: string,
     *   lastName: string,
     *   code?: ?string,
     *   personalCode?: ?string,
     *   birthDate?: ?DateTime,
     *   email?: ?string,
     *   phone?: ?string,
     *   address?: ?EmployeesCreateHrRequestAddress,
     *   iban?: ?string,
     *   socialInsuranceNo?: ?string,
     *   socialInsuranceStart?: ?DateTime,
     *   hireDate?: ?DateTime,
     *   applyAllowance?: ?bool,
     *   allowanceOverride?: ?string,
     *   pensionAccumulation?: ?bool,
     *   payrollOptions?: ?array<string, string>,
     *   notes?: ?string,
     *   attributes?: ?array<EmployeesCreateHrRequestAttributesItem>,
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
        $this->applyAllowance = $values['applyAllowance'] ?? null;
        $this->allowanceOverride = $values['allowanceOverride'] ?? null;
        $this->pensionAccumulation = $values['pensionAccumulation'] ?? null;
        $this->payrollOptions = $values['payrollOptions'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
    }
}
