<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class MergePartnersResponseMovedItem extends JsonSerializableType
{
    /**
     * @var string $table
     */
    #[JsonProperty('table')]
    public string $table;

    /**
     * @var string $column
     */
    #[JsonProperty('column')]
    public string $column;

    /**
     * @var int $rows
     */
    #[JsonProperty('rows')]
    public int $rows;

    /**
     * @param array{
     *   table: string,
     *   column: string,
     *   rows: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->table = $values['table'];
        $this->column = $values['column'];
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
