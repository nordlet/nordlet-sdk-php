<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class SchedulesListPayrollResponse extends JsonSerializableType
{
    /**
     * @var array<SchedulesListPayrollResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([SchedulesListPayrollResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<SchedulesListPayrollResponseRowsItem>,
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
