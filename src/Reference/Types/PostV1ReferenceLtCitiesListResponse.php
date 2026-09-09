<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReferenceLtCitiesListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1ReferenceLtCitiesListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReferenceLtCitiesListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1ReferenceLtCitiesListResponseRowsItem>,
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
