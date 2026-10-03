<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsCertificatesUploadResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1DeclarationsCertificatesUploadResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsCertificatesUploadResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1DeclarationsCertificatesUploadResponseRowsItem>,
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
