<?php

namespace Nordlet\Leads\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class FilesListLeadsResponse extends JsonSerializableType
{
    /**
     * @var array<FilesListLeadsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([FilesListLeadsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<FilesListLeadsResponseRowsItem>,
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
