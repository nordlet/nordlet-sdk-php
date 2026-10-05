<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DepartmentsListPayrollResponse extends JsonSerializableType
{
    /**
     * @var array<DepartmentsListPayrollResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([DepartmentsListPayrollResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<DepartmentsListPayrollResponseRowsItem>,
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
