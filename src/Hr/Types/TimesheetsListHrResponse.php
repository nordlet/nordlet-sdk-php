<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TimesheetsListHrResponse extends JsonSerializableType
{
    /**
     * @var array<TimesheetsListHrResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([TimesheetsListHrResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<TimesheetsListHrResponseRowsItem>,
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
