<?php

namespace Nordlet\Calendar\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1CalendarListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1CalendarListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1CalendarListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1CalendarListResponseRowsItem>,
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
