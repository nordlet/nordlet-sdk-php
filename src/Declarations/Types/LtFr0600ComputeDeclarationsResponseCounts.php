<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LtFr0600ComputeDeclarationsResponseCounts extends JsonSerializableType
{
    /**
     * @var int $salesInvoices
     */
    #[JsonProperty('salesInvoices')]
    public int $salesInvoices;

    /**
     * @var int $purchaseInvoices
     */
    #[JsonProperty('purchaseInvoices')]
    public int $purchaseInvoices;

    /**
     * @param array{
     *   salesInvoices: int,
     *   purchaseInvoices: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->salesInvoices = $values['salesInvoices'];
        $this->purchaseInvoices = $values['purchaseInvoices'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
