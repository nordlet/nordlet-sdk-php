<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class IntercompanyReportConsolidationResponseDirectionsItemDocumentsItem extends JsonSerializableType
{
    /**
     * @var string $sourceInvoiceId
     */
    #[JsonProperty('sourceInvoiceId')]
    public string $sourceInvoiceId;

    /**
     * @var string $fullNumber
     */
    #[JsonProperty('fullNumber')]
    public string $fullNumber;

    /**
     * @var DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public DateTime $issueDate;

    /**
     * @var value-of<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemType> $type
     */
    #[JsonProperty('type')]
    public string $type;

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
     * @var value-of<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemPaymentStatus> $paymentStatus
     */
    #[JsonProperty('paymentStatus')]
    public string $paymentStatus;

    /**
     * @var value-of<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemMatch> $match
     */
    #[JsonProperty('match')]
    public string $match;

    /**
     * @var ?IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemCounterpart $counterpart
     */
    #[JsonProperty('counterpart')]
    public ?IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemCounterpart $counterpart;

    /**
     * @param array{
     *   sourceInvoiceId: string,
     *   fullNumber: string,
     *   issueDate: DateTime,
     *   type: value-of<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemType>,
     *   currency: string,
     *   grossTotal: string,
     *   paymentStatus: value-of<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemPaymentStatus>,
     *   match: value-of<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemMatch>,
     *   counterpart?: ?IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemCounterpart,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sourceInvoiceId = $values['sourceInvoiceId'];
        $this->fullNumber = $values['fullNumber'];
        $this->issueDate = $values['issueDate'];
        $this->type = $values['type'];
        $this->currency = $values['currency'];
        $this->grossTotal = $values['grossTotal'];
        $this->paymentStatus = $values['paymentStatus'];
        $this->match = $values['match'];
        $this->counterpart = $values['counterpart'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
