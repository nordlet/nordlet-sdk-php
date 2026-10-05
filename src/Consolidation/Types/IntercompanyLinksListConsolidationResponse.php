<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class IntercompanyLinksListConsolidationResponse extends JsonSerializableType
{
    /**
     * @var array<IntercompanyLinksListConsolidationResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([IntercompanyLinksListConsolidationResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<IntercompanyLinksListConsolidationResponseRowsItem>,
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
