<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class FilesListPartnersResponse extends JsonSerializableType
{
    /**
     * @var array<FilesListPartnersResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([FilesListPartnersResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<FilesListPartnersResponseRowsItem>,
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
