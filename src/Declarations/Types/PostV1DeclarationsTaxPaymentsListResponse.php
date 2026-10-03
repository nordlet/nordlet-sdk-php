<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsTaxPaymentsListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1DeclarationsTaxPaymentsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsTaxPaymentsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1DeclarationsTaxPaymentsListResponseRowsItem>,
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
