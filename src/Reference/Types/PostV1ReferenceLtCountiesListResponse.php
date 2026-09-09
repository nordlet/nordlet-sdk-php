<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReferenceLtCountiesListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1ReferenceLtCountiesListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReferenceLtCountiesListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1ReferenceLtCountiesListResponseRowsItem>,
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
