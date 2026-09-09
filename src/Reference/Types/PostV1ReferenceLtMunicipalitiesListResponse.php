<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReferenceLtMunicipalitiesListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1ReferenceLtMunicipalitiesListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReferenceLtMunicipalitiesListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1ReferenceLtMunicipalitiesListResponseRowsItem>,
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
