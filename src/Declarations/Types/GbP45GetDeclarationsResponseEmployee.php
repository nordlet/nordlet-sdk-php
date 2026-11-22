<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class GbP45GetDeclarationsResponseEmployee extends JsonSerializableType
{
    /**
     * @var ?string $nino
     */
    #[JsonProperty('nino')]
    public ?string $nino;

    /**
     * @var string $surname
     */
    #[JsonProperty('surname')]
    public string $surname;

    /**
     * @var string $firstNames
     */
    #[JsonProperty('firstNames')]
    public string $firstNames;

    /**
     * @var DateTime $leavingDate
     */
    #[JsonProperty('leavingDate'), Date(Date::TYPE_DATE)]
    public DateTime $leavingDate;

    /**
     * @var ?string $payrollNumber
     */
    #[JsonProperty('payrollNumber')]
    public ?string $payrollNumber;

    /**
     * @var ?value-of<GbP45GetDeclarationsResponseEmployeeGender> $gender
     */
    #[JsonProperty('gender')]
    public ?string $gender;

    /**
     * @var ?string $dateOfBirth
     */
    #[JsonProperty('dateOfBirth')]
    public ?string $dateOfBirth;

    /**
     * @var array<string> $address
     */
    #[JsonProperty('address'), ArrayType(['string'])]
    public array $address;

    /**
     * @var ?string $postcode
     */
    #[JsonProperty('postcode')]
    public ?string $postcode;

    /**
     * @param array{
     *   surname: string,
     *   firstNames: string,
     *   leavingDate: DateTime,
     *   address: array<string>,
     *   nino?: ?string,
     *   payrollNumber?: ?string,
     *   gender?: ?value-of<GbP45GetDeclarationsResponseEmployeeGender>,
     *   dateOfBirth?: ?string,
     *   postcode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->nino = $values['nino'] ?? null;
        $this->surname = $values['surname'];
        $this->firstNames = $values['firstNames'];
        $this->leavingDate = $values['leavingDate'];
        $this->payrollNumber = $values['payrollNumber'] ?? null;
        $this->gender = $values['gender'] ?? null;
        $this->dateOfBirth = $values['dateOfBirth'] ?? null;
        $this->address = $values['address'];
        $this->postcode = $values['postcode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
