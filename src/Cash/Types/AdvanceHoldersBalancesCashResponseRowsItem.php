<?php

namespace Nordlet\Cash\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AdvanceHoldersBalancesCashResponseRowsItem extends JsonSerializableType
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
     * @var string $issued
     */
    #[JsonProperty('issued')]
    public string $issued;

    /**
     * @var string $returned
     */
    #[JsonProperty('returned')]
    public string $returned;

    /**
     * @var string $settled
     */
    #[JsonProperty('settled')]
    public string $settled;

    /**
     * @var string $balance
     */
    #[JsonProperty('balance')]
    public string $balance;

    /**
     * @param array{
     *   employeeId: string,
     *   firstName: string,
     *   lastName: string,
     *   issued: string,
     *   returned: string,
     *   settled: string,
     *   balance: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
        $this->issued = $values['issued'];
        $this->returned = $values['returned'];
        $this->settled = $values['settled'];
        $this->balance = $values['balance'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
