<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1HrEmployeesAttachmentsListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1HrEmployeesAttachmentsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1HrEmployeesAttachmentsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1HrEmployeesAttachmentsListResponseRowsItem>,
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
