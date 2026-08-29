<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ConsolidationIntercompanyCandidatesResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1ConsolidationIntercompanyCandidatesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ConsolidationIntercompanyCandidatesResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1ConsolidationIntercompanyCandidatesResponseRowsItem>,
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
