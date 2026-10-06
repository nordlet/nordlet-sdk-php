<?php

namespace Nordlet\Leads\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TypesListLeadsResponse extends JsonSerializableType
{
    /**
     * @var array<TypesListLeadsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([TypesListLeadsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<TypesListLeadsResponseRowsItem>,
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
