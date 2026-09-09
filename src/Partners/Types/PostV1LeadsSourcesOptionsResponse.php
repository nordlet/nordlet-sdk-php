<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1LeadsSourcesOptionsResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1LeadsSourcesOptionsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1LeadsSourcesOptionsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1LeadsSourcesOptionsResponseRowsItem>,
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
