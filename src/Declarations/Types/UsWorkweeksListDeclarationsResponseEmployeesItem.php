<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsWorkweeksListDeclarationsResponseEmployeesItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

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
     * @var string $workweekStart
     */
    #[JsonProperty('workweekStart')]
    public string $workweekStart;

    /**
     * @var bool $exempt
     */
    #[JsonProperty('exempt')]
    public bool $exempt;

    /**
     * @var array<UsWorkweeksListDeclarationsResponseEmployeesItemWeeksItem> $weeks
     */
    #[JsonProperty('weeks'), ArrayType([UsWorkweeksListDeclarationsResponseEmployeesItemWeeksItem::class])]
    public array $weeks;

    /**
     * @param array{
     *   employeeId: string,
     *   firstName: string,
     *   lastName: string,
     *   workweekStart: string,
     *   exempt: bool,
     *   weeks: array<UsWorkweeksListDeclarationsResponseEmployeesItemWeeksItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
        $this->workweekStart = $values['workweekStart'];
        $this->exempt = $values['exempt'];
        $this->weeks = $values['weeks'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
