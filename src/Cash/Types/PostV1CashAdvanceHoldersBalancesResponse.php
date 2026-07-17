<?php

namespace Nordlet\Cash\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1CashAdvanceHoldersBalancesResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1CashAdvanceHoldersBalancesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1CashAdvanceHoldersBalancesResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1CashAdvanceHoldersBalancesResponseRowsItem>,
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
