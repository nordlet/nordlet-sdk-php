<?php

namespace Nordlet\Leads\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TypesOptionsLeadsResponse extends JsonSerializableType
{
    /**
     * @var array<TypesOptionsLeadsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([TypesOptionsLeadsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<TypesOptionsLeadsResponseRowsItem>,
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
