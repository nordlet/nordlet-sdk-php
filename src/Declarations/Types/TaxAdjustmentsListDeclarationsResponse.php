<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TaxAdjustmentsListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<TaxAdjustmentsListDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([TaxAdjustmentsListDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<TaxAdjustmentsListDeclarationsResponseRowsItem>,
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
