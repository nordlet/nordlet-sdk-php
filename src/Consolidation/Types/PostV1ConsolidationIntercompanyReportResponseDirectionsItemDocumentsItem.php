<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItem extends JsonSerializableType
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
     * @var string $issueDate
     */
    #[JsonProperty('issueDate')]
    public string $issueDate;

    /**
     * @var value-of<PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemType> $type
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
     * @var value-of<PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemPaymentStatus> $paymentStatus
     */
    #[JsonProperty('paymentStatus')]
    public string $paymentStatus;

    /**
     * @var value-of<PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemMatch> $match
     */
    #[JsonProperty('match')]
    public string $match;

    /**
     * @var ?PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemCounterpart $counterpart
     */
    #[JsonProperty('counterpart')]
    public ?PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemCounterpart $counterpart;

    /**
     * @param array{
     *   sourceInvoiceId: string,
     *   fullNumber: string,
     *   issueDate: string,
     *   type: value-of<PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemType>,
     *   currency: string,
     *   grossTotal: string,
     *   paymentStatus: value-of<PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemPaymentStatus>,
     *   match: value-of<PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemMatch>,
     *   counterpart?: ?PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemCounterpart,
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
