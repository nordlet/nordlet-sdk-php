<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CertificatesUploadDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<CertificatesUploadDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([CertificatesUploadDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<CertificatesUploadDeclarationsResponseRowsItem>,
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
