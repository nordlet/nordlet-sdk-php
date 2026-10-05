<?php

namespace Nordlet\Fleet\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class NaturaPreviewFleetResponse extends JsonSerializableType
{
    /**
     * @var array<NaturaPreviewFleetResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([NaturaPreviewFleetResponseRowsItem::class])]
    public array $rows;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   rows: array<NaturaPreviewFleetResponseRowsItem>,
     *   total: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
