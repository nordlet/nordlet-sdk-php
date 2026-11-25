<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItTfrAccrualComputeDeclarationsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<ItTfrAccrualComputeDeclarationsResponseRowsItemDestination> $destination
     */
    #[JsonProperty('destination')]
    public string $destination;

    /**
     * @var string $base
     */
    #[JsonProperty('base')]
    public string $base;

    /**
     * @var string $quota
     */
    #[JsonProperty('quota')]
    public string $quota;

    /**
     * @var string $contributionBase
     */
    #[JsonProperty('contributionBase')]
    public string $contributionBase;

    /**
     * @var string $contribution
     */
    #[JsonProperty('contribution')]
    public string $contribution;

    /**
     * @var string $accrual
     */
    #[JsonProperty('accrual')]
    public string $accrual;

    /**
     * @var array<ItTfrAccrualComputeDeclarationsResponseRowsItemLeftOutItem> $leftOut
     */
    #[JsonProperty('leftOut'), ArrayType([ItTfrAccrualComputeDeclarationsResponseRowsItemLeftOutItem::class])]
    public array $leftOut;

    /**
     * @param array{
     *   employeeId: string,
     *   name: string,
     *   destination: value-of<ItTfrAccrualComputeDeclarationsResponseRowsItemDestination>,
     *   base: string,
     *   quota: string,
     *   contributionBase: string,
     *   contribution: string,
     *   accrual: string,
     *   leftOut: array<ItTfrAccrualComputeDeclarationsResponseRowsItemLeftOutItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->name = $values['name'];
        $this->destination = $values['destination'];
        $this->base = $values['base'];
        $this->quota = $values['quota'];
        $this->contributionBase = $values['contributionBase'];
        $this->contribution = $values['contribution'];
        $this->accrual = $values['accrual'];
        $this->leftOut = $values['leftOut'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
