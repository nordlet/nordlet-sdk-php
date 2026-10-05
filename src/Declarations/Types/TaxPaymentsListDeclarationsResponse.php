<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TaxPaymentsListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<TaxPaymentsListDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([TaxPaymentsListDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<TaxPaymentsListDeclarationsResponseRowsItem>,
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
