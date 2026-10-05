<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class IntrastatThresholdsListReferenceResponse extends JsonSerializableType
{
    /**
     * @var array<IntrastatThresholdsListReferenceResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([IntrastatThresholdsListReferenceResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<IntrastatThresholdsListReferenceResponseRowsItem>,
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
