<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CertificatesDeleteDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<CertificatesDeleteDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([CertificatesDeleteDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<CertificatesDeleteDeclarationsResponseRowsItem>,
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
