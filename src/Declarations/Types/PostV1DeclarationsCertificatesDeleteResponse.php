<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsCertificatesDeleteResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1DeclarationsCertificatesDeleteResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsCertificatesDeleteResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1DeclarationsCertificatesDeleteResponseRowsItem>,
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
