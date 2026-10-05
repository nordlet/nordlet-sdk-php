<?php

namespace Nordlet\Leads\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class SourcesListLeadsResponse extends JsonSerializableType
{
    /**
     * @var array<SourcesListLeadsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([SourcesListLeadsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<SourcesListLeadsResponseRowsItem>,
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
