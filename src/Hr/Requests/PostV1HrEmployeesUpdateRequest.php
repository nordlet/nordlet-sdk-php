<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PostV1HrEmployeesUpdateRequestAddress;
use Nordlet\Hr\Types\PostV1HrEmployeesUpdateRequestStatus;

class PostV1HrEmployeesUpdateRequest extends JsonSerializableType
{
    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $firstName
     */
    #[JsonProperty('firstName')]
    public ?string $firstName;

    /**
     * @var ?string $lastName
     */
    #[JsonProperty('lastName')]
    public ?string $lastName;

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
     * @var ?PostV1HrEmployeesUpdateRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1HrEmployeesUpdateRequestAddress $address;

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
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $terminationDate
     */
    #[JsonProperty('terminationDate')]
    public ?string $terminationDate;

    /**
     * @var ?value-of<PostV1HrEmployeesUpdateRequestStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @param array{
     *   id: string,
     *   code?: ?string,
     *   firstName?: ?string,
     *   lastName?: ?string,
     *   personalCode?: ?string,
     *   birthDate?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   address?: ?PostV1HrEmployeesUpdateRequestAddress,
     *   iban?: ?string,
     *   socialInsuranceNo?: ?string,
     *   socialInsuranceStart?: ?string,
     *   hireDate?: ?string,
     *   applyNpd?: ?bool,
     *   npdOverride?: ?string,
     *   pensionAccumulation?: ?bool,
     *   notes?: ?string,
     *   terminationDate?: ?string,
     *   status?: ?value-of<PostV1HrEmployeesUpdateRequestStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'] ?? null;
        $this->firstName = $values['firstName'] ?? null;
        $this->lastName = $values['lastName'] ?? null;
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
        $this->id = $values['id'];
        $this->terminationDate = $values['terminationDate'] ?? null;
        $this->status = $values['status'] ?? null;
    }
}
