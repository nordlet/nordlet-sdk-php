<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1HrEmployeesUpdateResponse extends JsonSerializableType
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
     * @var ?PostV1HrEmployeesUpdateResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1HrEmployeesUpdateResponseAddress $address;

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
     * @var bool $applyNpd
     */
    #[JsonProperty('applyNpd')]
    public bool $applyNpd;

    /**
     * @var ?string $npdOverride
     */
    #[JsonProperty('npdOverride')]
    public ?string $npdOverride;

    /**
     * @var bool $pensionAccumulation
     */
    #[JsonProperty('pensionAccumulation')]
    public bool $pensionAccumulation;

    /**
     * @var value-of<PostV1HrEmployeesUpdateResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

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
     * @param array{
     *   id: string,
     *   firstName: string,
     *   lastName: string,
     *   applyNpd: bool,
     *   pensionAccumulation: bool,
     *   status: value-of<PostV1HrEmployeesUpdateResponseStatus>,
     *   createdAt: string,
     *   code?: ?string,
     *   personalCode?: ?string,
     *   birthDate?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   address?: ?PostV1HrEmployeesUpdateResponseAddress,
     *   iban?: ?string,
     *   socialInsuranceNo?: ?string,
     *   socialInsuranceStart?: ?string,
     *   hireDate?: ?string,
     *   terminationDate?: ?string,
     *   npdOverride?: ?string,
     *   notes?: ?string,
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
        $this->applyNpd = $values['applyNpd'];
        $this->npdOverride = $values['npdOverride'] ?? null;
        $this->pensionAccumulation = $values['pensionAccumulation'];
        $this->status = $values['status'];
        $this->notes = $values['notes'] ?? null;
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
