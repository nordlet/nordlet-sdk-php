<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsDebtAgingResponse extends JsonSerializableType
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
     * @var array<PostV1ReportsDebtAgingResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsDebtAgingResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   asOf: string,
     *   side: string,
     *   rows: array<PostV1ReportsDebtAgingResponseRowsItem>,
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
