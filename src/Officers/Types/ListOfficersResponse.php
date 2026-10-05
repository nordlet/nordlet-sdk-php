<?php

namespace Nordlet\Officers\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ListOfficersResponse extends JsonSerializableType
{
    /**
     * @var array<ListOfficersResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ListOfficersResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ListOfficersResponseRowsItem>,
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
