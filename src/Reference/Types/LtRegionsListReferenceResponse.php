<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtRegionsListReferenceResponse extends JsonSerializableType
{
    /**
     * @var array<LtRegionsListReferenceResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([LtRegionsListReferenceResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<LtRegionsListReferenceResponseRowsItem>,
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
