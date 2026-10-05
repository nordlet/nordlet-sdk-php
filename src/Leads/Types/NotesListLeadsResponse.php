<?php

namespace Nordlet\Leads\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class NotesListLeadsResponse extends JsonSerializableType
{
    /**
     * @var array<NotesListLeadsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([NotesListLeadsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<NotesListLeadsResponseRowsItem>,
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
