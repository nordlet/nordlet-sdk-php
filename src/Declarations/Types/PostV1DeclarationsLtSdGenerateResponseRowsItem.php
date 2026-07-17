<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtSdGenerateResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $contractId
     */
    #[JsonProperty('contractId')]
    public string $contractId;

    /**
     * @var string $contractNo
     */
    #[JsonProperty('contractNo')]
    public string $contractNo;

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
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var ?string $professionCode
     */
    #[JsonProperty('professionCode')]
    public ?string $professionCode;

    /**
     * @var ?string $endReason
     */
    #[JsonProperty('endReason')]
    public ?string $endReason;

    /**
     * @var ?string $finalInsuredIncome
     */
    #[JsonProperty('finalInsuredIncome')]
    public ?string $finalInsuredIncome;

    /**
     * @var ?string $finalContributions
     */
    #[JsonProperty('finalContributions')]
    public ?string $finalContributions;

    /**
     * @param array{
     *   employeeId: string,
     *   contractId: string,
     *   contractNo: string,
     *   firstName: string,
     *   lastName: string,
     *   date: string,
     *   personalCode?: ?string,
     *   socialInsuranceNo?: ?string,
     *   professionCode?: ?string,
     *   endReason?: ?string,
     *   finalInsuredIncome?: ?string,
     *   finalContributions?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->contractId = $values['contractId'];
        $this->contractNo = $values['contractNo'];
        $this->personalCode = $values['personalCode'] ?? null;
        $this->socialInsuranceNo = $values['socialInsuranceNo'] ?? null;
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
        $this->date = $values['date'];
        $this->professionCode = $values['professionCode'] ?? null;
        $this->endReason = $values['endReason'] ?? null;
        $this->finalInsuredIncome = $values['finalInsuredIncome'] ?? null;
        $this->finalContributions = $values['finalContributions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
