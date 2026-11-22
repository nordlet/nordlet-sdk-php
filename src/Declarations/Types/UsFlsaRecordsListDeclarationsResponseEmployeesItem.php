<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class UsFlsaRecordsListDeclarationsResponseEmployeesItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

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
     * @var UsFlsaRecordsListDeclarationsResponseEmployeesItemAddress $address
     */
    #[JsonProperty('address')]
    public UsFlsaRecordsListDeclarationsResponseEmployeesItemAddress $address;

    /**
     * @var ?DateTime $birthDate
     */
    #[JsonProperty('birthDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $birthDate;

    /**
     * @var ?value-of<UsFlsaRecordsListDeclarationsResponseEmployeesItemSex> $sex
     */
    #[JsonProperty('sex')]
    public ?string $sex;

    /**
     * @var ?string $occupation
     */
    #[JsonProperty('occupation')]
    public ?string $occupation;

    /**
     * @var UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweekStart $workweekStart
     */
    #[JsonProperty('workweekStart')]
    public UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweekStart $workweekStart;

    /**
     * @var bool $exempt
     */
    #[JsonProperty('exempt')]
    public bool $exempt;

    /**
     * @var array<UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweeksItem> $workweeks
     */
    #[JsonProperty('workweeks'), ArrayType([UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweeksItem::class])]
    public array $workweeks;

    /**
     * @var array<UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItem> $payPeriods
     */
    #[JsonProperty('payPeriods'), ArrayType([UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItem::class])]
    public array $payPeriods;

    /**
     * @param array{
     *   employeeId: string,
     *   firstName: string,
     *   lastName: string,
     *   address: UsFlsaRecordsListDeclarationsResponseEmployeesItemAddress,
     *   workweekStart: UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweekStart,
     *   exempt: bool,
     *   workweeks: array<UsFlsaRecordsListDeclarationsResponseEmployeesItemWorkweeksItem>,
     *   payPeriods: array<UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItem>,
     *   code?: ?string,
     *   birthDate?: ?DateTime,
     *   sex?: ?value-of<UsFlsaRecordsListDeclarationsResponseEmployeesItemSex>,
     *   occupation?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->code = $values['code'] ?? null;
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
        $this->address = $values['address'];
        $this->birthDate = $values['birthDate'] ?? null;
        $this->sex = $values['sex'] ?? null;
        $this->occupation = $values['occupation'] ?? null;
        $this->workweekStart = $values['workweekStart'];
        $this->exempt = $values['exempt'];
        $this->workweeks = $values['workweeks'];
        $this->payPeriods = $values['payPeriods'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
