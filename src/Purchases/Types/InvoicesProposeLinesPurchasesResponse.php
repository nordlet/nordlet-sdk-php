<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class InvoicesProposeLinesPurchasesResponse extends JsonSerializableType
{
    /**
     * @var array<InvoicesProposeLinesPurchasesResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([InvoicesProposeLinesPurchasesResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   lines: array<InvoicesProposeLinesPurchasesResponseLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
