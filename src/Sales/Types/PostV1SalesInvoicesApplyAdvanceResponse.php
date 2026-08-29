<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesApplyAdvanceResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var value-of<PostV1SalesInvoicesApplyAdvanceResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<PostV1SalesInvoicesApplyAdvanceResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var value-of<PostV1SalesInvoicesApplyAdvanceResponsePaymentStatus> $paymentStatus
     */
    #[JsonProperty('paymentStatus')]
    public string $paymentStatus;

    /**
     * @var ?string $series
     */
    #[JsonProperty('series')]
    public ?string $series;

    /**
     * @var ?int $number
     */
    #[JsonProperty('number')]
    public ?int $number;

    /**
     * @var ?string $fullNumber
     */
    #[JsonProperty('fullNumber')]
    public ?string $fullNumber;

    /**
     * @var ?string $issueDate
     */
    #[JsonProperty('issueDate')]
    public ?string $issueDate;

    /**
     * @var ?string $dueDate
     */
    #[JsonProperty('dueDate')]
    public ?string $dueDate;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $netTotal
     */
    #[JsonProperty('netTotal')]
    public string $netTotal;

    /**
     * @var string $vatTotal
     */
    #[JsonProperty('vatTotal')]
    public string $vatTotal;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var string $paidAmount
     */
    #[JsonProperty('paidAmount')]
    public string $paidAmount;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var ?string $appliedToInvoiceId
     */
    #[JsonProperty('appliedToInvoiceId')]
    public ?string $appliedToInvoiceId;

    /**
     * @var ?string $creditedInvoiceId
     */
    #[JsonProperty('creditedInvoiceId')]
    public ?string $creditedInvoiceId;

    /**
     * @var ?string $agreementId
     */
    #[JsonProperty('agreementId')]
    public ?string $agreementId;

    /**
     * @var ?value-of<PostV1SalesInvoicesApplyAdvanceResponseVatScheme> $vatScheme
     */
    #[JsonProperty('vatScheme')]
    public ?string $vatScheme;

    /**
     * @var ?string $vatCountryCode
     */
    #[JsonProperty('vatCountryCode')]
    public ?string $vatCountryCode;

    /**
     * @var bool $deemedSupplier
     */
    #[JsonProperty('deemedSupplier')]
    public bool $deemedSupplier;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var array<PostV1SalesInvoicesApplyAdvanceResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1SalesInvoicesApplyAdvanceResponseLinesItem::class])]
    public array $lines;

    /**
     * @var ?PostV1SalesInvoicesApplyAdvanceResponseVatEvidence $vatEvidence
     */
    #[JsonProperty('vatEvidence')]
    public ?PostV1SalesInvoicesApplyAdvanceResponseVatEvidence $vatEvidence;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   type: value-of<PostV1SalesInvoicesApplyAdvanceResponseType>,
     *   status: value-of<PostV1SalesInvoicesApplyAdvanceResponseStatus>,
     *   paymentStatus: value-of<PostV1SalesInvoicesApplyAdvanceResponsePaymentStatus>,
     *   currency: string,
     *   netTotal: string,
     *   vatTotal: string,
     *   grossTotal: string,
     *   paidAmount: string,
     *   deemedSupplier: bool,
     *   createdAt: string,
     *   updatedAt: string,
     *   lines: array<PostV1SalesInvoicesApplyAdvanceResponseLinesItem>,
     *   series?: ?string,
     *   number?: ?int,
     *   fullNumber?: ?string,
     *   issueDate?: ?string,
     *   dueDate?: ?string,
     *   journalTransactionId?: ?string,
     *   appliedToInvoiceId?: ?string,
     *   creditedInvoiceId?: ?string,
     *   agreementId?: ?string,
     *   vatScheme?: ?value-of<PostV1SalesInvoicesApplyAdvanceResponseVatScheme>,
     *   vatCountryCode?: ?string,
     *   notes?: ?string,
     *   vatEvidence?: ?PostV1SalesInvoicesApplyAdvanceResponseVatEvidence,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'];
        $this->type = $values['type'];
        $this->status = $values['status'];
        $this->paymentStatus = $values['paymentStatus'];
        $this->series = $values['series'] ?? null;
        $this->number = $values['number'] ?? null;
        $this->fullNumber = $values['fullNumber'] ?? null;
        $this->issueDate = $values['issueDate'] ?? null;
        $this->dueDate = $values['dueDate'] ?? null;
        $this->currency = $values['currency'];
        $this->netTotal = $values['netTotal'];
        $this->vatTotal = $values['vatTotal'];
        $this->grossTotal = $values['grossTotal'];
        $this->paidAmount = $values['paidAmount'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->appliedToInvoiceId = $values['appliedToInvoiceId'] ?? null;
        $this->creditedInvoiceId = $values['creditedInvoiceId'] ?? null;
        $this->agreementId = $values['agreementId'] ?? null;
        $this->vatScheme = $values['vatScheme'] ?? null;
        $this->vatCountryCode = $values['vatCountryCode'] ?? null;
        $this->deemedSupplier = $values['deemedSupplier'];
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->lines = $values['lines'];
        $this->vatEvidence = $values['vatEvidence'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
