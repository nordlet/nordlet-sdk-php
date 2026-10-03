<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlJpkFaGenerateResponseTotals extends JsonSerializableType
{
    /**
     * @var string $invoices
     */
    #[JsonProperty('invoices')]
    public string $invoices;

    /**
     * @var string $lines
     */
    #[JsonProperty('lines')]
    public string $lines;

    /**
     * @param array{
     *   invoices: string,
     *   lines: string,
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
