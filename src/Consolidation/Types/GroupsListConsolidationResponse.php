<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class GroupsListConsolidationResponse extends JsonSerializableType
{
    /**
     * @var array<GroupsListConsolidationResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([GroupsListConsolidationResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<GroupsListConsolidationResponseRowsItem>,
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
