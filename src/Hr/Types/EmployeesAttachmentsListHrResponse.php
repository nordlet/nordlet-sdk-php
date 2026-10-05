<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EmployeesAttachmentsListHrResponse extends JsonSerializableType
{
    /**
     * @var array<EmployeesAttachmentsListHrResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([EmployeesAttachmentsListHrResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<EmployeesAttachmentsListHrResponseRowsItem>,
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
