<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DebtAgingReportsResponse extends JsonSerializableType
{
    /**
     * @var string $asOf
     */
    #[JsonProperty('asOf')]
    public string $asOf;

    /**
     * @var string $side
     */
    #[JsonProperty('side')]
    public string $side;

    /**
     * @var array<DebtAgingReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([DebtAgingReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   asOf: string,
     *   side: string,
     *   rows: array<DebtAgingReportsResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->asOf = $values['asOf'];
        $this->side = $values['side'];
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
