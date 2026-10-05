<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class IntercompanyReportConsolidationResponseDirectionsItemUnmatchedPurchasesItem extends JsonSerializableType
{
    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var string $documentNumber
     */
    #[JsonProperty('documentNumber')]
    public string $documentNumber;

    /**
     * @var DateTime $documentDate
     */
    #[JsonProperty('documentDate'), Date(Date::TYPE_DATE)]
    public DateTime $documentDate;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var value-of<IntercompanyReportConsolidationResponseDirectionsItemUnmatchedPurchasesItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   invoiceId: string,
     *   documentNumber: string,
     *   documentDate: DateTime,
     *   currency: string,
     *   grossTotal: string,
     *   status: value-of<IntercompanyReportConsolidationResponseDirectionsItemUnmatchedPurchasesItemStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceId = $values['invoiceId'];
        $this->documentNumber = $values['documentNumber'];
        $this->documentDate = $values['documentDate'];
        $this->currency = $values['currency'];
        $this->grossTotal = $values['grossTotal'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
