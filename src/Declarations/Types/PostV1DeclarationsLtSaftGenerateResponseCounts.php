<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtSaftGenerateResponseCounts extends JsonSerializableType
{
    /**
     * @var int $accounts
     */
    #[JsonProperty('accounts')]
    public int $accounts;

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
     * @var int $glTransactions
     */
    #[JsonProperty('glTransactions')]
    public int $glTransactions;

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
     * @var int $payments
     */
    #[JsonProperty('payments')]
    public int $payments;

    /**
     * @var int $stockMovements
     */
    #[JsonProperty('stockMovements')]
    public int $stockMovements;

    /**
     * @var int $assetTransactions
     */
    #[JsonProperty('assetTransactions')]
    public int $assetTransactions;

    /**
     * @param array{
     *   accounts: int,
     *   customers: int,
     *   suppliers: int,
     *   glTransactions: int,
     *   salesInvoices: int,
     *   purchaseInvoices: int,
     *   payments: int,
     *   stockMovements: int,
     *   assetTransactions: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accounts = $values['accounts'];
        $this->customers = $values['customers'];
        $this->suppliers = $values['suppliers'];
        $this->glTransactions = $values['glTransactions'];
        $this->salesInvoices = $values['salesInvoices'];
        $this->purchaseInvoices = $values['purchaseInvoices'];
        $this->payments = $values['payments'];
        $this->stockMovements = $values['stockMovements'];
        $this->assetTransactions = $values['assetTransactions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
