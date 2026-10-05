<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CertificatesListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<CertificatesListDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([CertificatesListDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<CertificatesListDeclarationsResponseRowsItem>,
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
