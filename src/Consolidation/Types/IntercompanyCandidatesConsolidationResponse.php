<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class IntercompanyCandidatesConsolidationResponse extends JsonSerializableType
{
    /**
     * @var array<IntercompanyCandidatesConsolidationResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([IntercompanyCandidatesConsolidationResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<IntercompanyCandidatesConsolidationResponseRowsItem>,
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
