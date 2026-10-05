<?php

namespace Nordlet\Leads\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class SourcesOptionsLeadsResponse extends JsonSerializableType
{
    /**
     * @var array<SourcesOptionsLeadsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([SourcesOptionsLeadsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<SourcesOptionsLeadsResponseRowsItem>,
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
