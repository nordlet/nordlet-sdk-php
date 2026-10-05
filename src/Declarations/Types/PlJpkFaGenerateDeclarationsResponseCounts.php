<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PlJpkFaGenerateDeclarationsResponseCounts extends JsonSerializableType
{
    /**
     * @var int $invoices
     */
    #[JsonProperty('invoices')]
    public int $invoices;

    /**
     * @var int $lines
     */
    #[JsonProperty('lines')]
    public int $lines;

    /**
     * @param array{
     *   invoices: int,
     *   lines: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoices = $values['invoices'];
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
