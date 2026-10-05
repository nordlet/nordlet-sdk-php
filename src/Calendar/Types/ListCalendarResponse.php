<?php

namespace Nordlet\Calendar\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ListCalendarResponse extends JsonSerializableType
{
    /**
     * @var array<ListCalendarResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ListCalendarResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<ListCalendarResponseRowsItem>,
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
