<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemCounterpart extends JsonSerializableType
{
    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var value-of<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemCounterpartStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var value-of<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemCounterpartPaymentStatus> $paymentStatus
     */
    #[JsonProperty('paymentStatus')]
    public string $paymentStatus;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var bool $amountsMatch
     */
    #[JsonProperty('amountsMatch')]
    public bool $amountsMatch;

    /**
     * @param array{
     *   invoiceId: string,
     *   status: value-of<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemCounterpartStatus>,
     *   paymentStatus: value-of<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemCounterpartPaymentStatus>,
     *   grossTotal: string,
     *   amountsMatch: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceId = $values['invoiceId'];
        $this->status = $values['status'];
        $this->paymentStatus = $values['paymentStatus'];
        $this->grossTotal = $values['grossTotal'];
        $this->amountsMatch = $values['amountsMatch'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
