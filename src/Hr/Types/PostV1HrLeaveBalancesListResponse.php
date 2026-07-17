<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1HrLeaveBalancesListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1HrLeaveBalancesListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1HrLeaveBalancesListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1HrLeaveBalancesListResponseRowsItem>,
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
