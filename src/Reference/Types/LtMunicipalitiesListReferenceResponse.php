<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtMunicipalitiesListReferenceResponse extends JsonSerializableType
{
    /**
     * @var array<LtMunicipalitiesListReferenceResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([LtMunicipalitiesListReferenceResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<LtMunicipalitiesListReferenceResponseRowsItem>,
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
