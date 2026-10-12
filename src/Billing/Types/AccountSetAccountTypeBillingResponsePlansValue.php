<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AccountSetAccountTypeBillingResponsePlansValue extends JsonSerializableType
{
    /**
     * @var string $monthlyFeeEur
     */
    #[JsonProperty('monthlyFeeEur')]
    public string $monthlyFeeEur;

    /**
     * @var int $includedInvoices
     */
    #[JsonProperty('includedInvoices')]
    public int $includedInvoices;

    /**
     * @var string $invoiceOverageEur
     */
    #[JsonProperty('invoiceOverageEur')]
    public string $invoiceOverageEur;

    /**
     * @var float $includedDatabaseBytes
     */
    #[JsonProperty('includedDatabaseBytes')]
    public float $includedDatabaseBytes;

    /**
     * @var float $includedFileBytes
     */
    #[JsonProperty('includedFileBytes')]
    public float $includedFileBytes;

    /**
     * @param array{
     *   monthlyFeeEur: string,
     *   includedInvoices: int,
     *   invoiceOverageEur: string,
     *   includedDatabaseBytes: float,
     *   includedFileBytes: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->monthlyFeeEur = $values['monthlyFeeEur'];
        $this->includedInvoices = $values['includedInvoices'];
        $this->invoiceOverageEur = $values['invoiceOverageEur'];
        $this->includedDatabaseBytes = $values['includedDatabaseBytes'];
        $this->includedFileBytes = $values['includedFileBytes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
