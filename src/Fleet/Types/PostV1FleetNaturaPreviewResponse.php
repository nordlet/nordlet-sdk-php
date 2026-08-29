<?php

namespace Nordlet\Fleet\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1FleetNaturaPreviewResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1FleetNaturaPreviewResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1FleetNaturaPreviewResponseRowsItem::class])]
    public array $rows;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   rows: array<PostV1FleetNaturaPreviewResponseRowsItem>,
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
