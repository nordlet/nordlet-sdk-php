<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtSamComputeResponsePersonsItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var ?string $personalCode
     */
    #[JsonProperty('personalCode')]
    public ?string $personalCode;

    /**
     * @var ?string $socialInsuranceNo
     */
    #[JsonProperty('socialInsuranceNo')]
    public ?string $socialInsuranceNo;

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
     * @var string $insuredIncome
     */
    #[JsonProperty('insuredIncome')]
    public string $insuredIncome;

    /**
     * @var string $contributions
     */
    #[JsonProperty('contributions')]
    public string $contributions;

    /**
     * @var string $tariffPercent
     */
    #[JsonProperty('tariffPercent')]
    public string $tariffPercent;

    /**
     * @param array{
     *   employeeId: string,
     *   firstName: string,
     *   lastName: string,
     *   insuredIncome: string,
     *   contributions: string,
     *   tariffPercent: string,
     *   personalCode?: ?string,
     *   socialInsuranceNo?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->personalCode = $values['personalCode'] ?? null;
        $this->socialInsuranceNo = $values['socialInsuranceNo'] ?? null;
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
        $this->insuredIncome = $values['insuredIncome'];
        $this->contributions = $values['contributions'];
        $this->tariffPercent = $values['tariffPercent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
