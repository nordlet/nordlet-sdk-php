<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtGpm312ComputeResponseRowsItem extends JsonSerializableType
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
     * @var string $paymentCode
     */
    #[JsonProperty('paymentCode')]
    public string $paymentCode;

    /**
     * @var string $paidAmount
     */
    #[JsonProperty('paidAmount')]
    public string $paidAmount;

    /**
     * @var string $gpmWithheld
     */
    #[JsonProperty('gpmWithheld')]
    public string $gpmWithheld;

    /**
     * @param array{
     *   employeeId: string,
     *   firstName: string,
     *   lastName: string,
     *   paymentCode: string,
     *   paidAmount: string,
     *   gpmWithheld: string,
     *   personalCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->personalCode = $values['personalCode'] ?? null;
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
        $this->paymentCode = $values['paymentCode'];
        $this->paidAmount = $values['paidAmount'];
        $this->gpmWithheld = $values['gpmWithheld'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
