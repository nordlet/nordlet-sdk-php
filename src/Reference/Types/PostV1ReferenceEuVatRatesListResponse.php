<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReferenceEuVatRatesListResponse extends JsonSerializableType
{
    /**
     * @var string $notice
     */
    #[JsonProperty('notice')]
    public string $notice;

    /**
     * @var array<PostV1ReferenceEuVatRatesListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReferenceEuVatRatesListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   notice: string,
     *   rows: array<PostV1ReferenceEuVatRatesListResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->notice = $values['notice'];
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
