<?php

namespace Nordlet\Assets\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DepreciationPreviewAssetsResponse extends JsonSerializableType
{
    /**
     * @var array<DepreciationPreviewAssetsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([DepreciationPreviewAssetsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   rows: array<DepreciationPreviewAssetsResponseRowsItem>,
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
