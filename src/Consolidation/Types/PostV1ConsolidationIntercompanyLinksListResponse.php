<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ConsolidationIntercompanyLinksListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1ConsolidationIntercompanyLinksListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ConsolidationIntercompanyLinksListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1ConsolidationIntercompanyLinksListResponseRowsItem>,
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
