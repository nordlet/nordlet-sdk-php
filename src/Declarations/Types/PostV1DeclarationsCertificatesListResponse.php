<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsCertificatesListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1DeclarationsCertificatesListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsCertificatesListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1DeclarationsCertificatesListResponseRowsItem>,
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
