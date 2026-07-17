<?php

namespace Nordlet\Assets\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AssetsDepreciationPreviewResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1AssetsDepreciationPreviewResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1AssetsDepreciationPreviewResponseRowsItem::class])]
    public array $rows;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   rows: array<PostV1AssetsDepreciationPreviewResponseRowsItem>,
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
