<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtFr0564ComputeResponseCounts extends JsonSerializableType
{
    /**
     * @var int $salesInvoices
     */
    #[JsonProperty('salesInvoices')]
    public int $salesInvoices;

    /**
     * @param array{
     *   salesInvoices: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->salesInvoices = $values['salesInvoices'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
