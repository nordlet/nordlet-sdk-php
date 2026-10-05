<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LtIsafGenerateDeclarationsResponseCounts extends JsonSerializableType
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
     * @var int $customers
     */
    #[JsonProperty('customers')]
    public int $customers;

    /**
     * @var int $suppliers
     */
    #[JsonProperty('suppliers')]
    public int $suppliers;

    /**
     * @param array{
     *   salesInvoices: int,
     *   purchaseInvoices: int,
     *   customers: int,
     *   suppliers: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->salesInvoices = $values['salesInvoices'];
        $this->purchaseInvoices = $values['purchaseInvoices'];
        $this->customers = $values['customers'];
        $this->suppliers = $values['suppliers'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
