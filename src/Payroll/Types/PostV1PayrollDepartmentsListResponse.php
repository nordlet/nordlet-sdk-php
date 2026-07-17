<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1PayrollDepartmentsListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1PayrollDepartmentsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1PayrollDepartmentsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1PayrollDepartmentsListResponseRowsItem>,
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
