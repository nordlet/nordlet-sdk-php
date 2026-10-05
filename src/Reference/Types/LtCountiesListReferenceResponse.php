<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtCountiesListReferenceResponse extends JsonSerializableType
{
    /**
     * @var array<LtCountiesListReferenceResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([LtCountiesListReferenceResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<LtCountiesListReferenceResponseRowsItem>,
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
