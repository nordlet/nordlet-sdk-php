<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LeaveBalancesListHrResponse extends JsonSerializableType
{
    /**
     * @var array<LeaveBalancesListHrResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([LeaveBalancesListHrResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<LeaveBalancesListHrResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
