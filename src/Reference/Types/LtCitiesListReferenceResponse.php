<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtCitiesListReferenceResponse extends JsonSerializableType
{
    /**
     * @var array<LtCitiesListReferenceResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([LtCitiesListReferenceResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<LtCitiesListReferenceResponseRowsItem>,
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
