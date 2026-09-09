<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesIssueResponse extends JsonSerializableType
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
     * @var value-of<PostV1SalesInvoicesIssueResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<PostV1SalesInvoicesIssueResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var value-of<PostV1SalesInvoicesIssueResponsePaymentStatus> $paymentStatus
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
     * @var ?value-of<PostV1SalesInvoicesIssueResponseVatScheme> $vatScheme
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
     * @var ?string $documentRef
     */
    #[JsonProperty('documentRef')]
    public ?string $documentRef;

    /**
     * @var ?string $operationTypeId
     */
    #[JsonProperty('operationTypeId')]
    public ?string $operationTypeId;

    /**
     * @var ?string $documentSeriesId
     */
    #[JsonProperty('documentSeriesId')]
    public ?string $documentSeriesId;

    /**
     * @var ?string $seriesLabel
     */
    #[JsonProperty('seriesLabel')]
    public ?string $seriesLabel;

    /**
     * @var string $discountPercent
     */
    #[JsonProperty('discountPercent')]
    public string $discountPercent;

    /**
     * @var ?string $orderNumber
     */
    #[JsonProperty('orderNumber')]
    public ?string $orderNumber;

    /**
     * @var ?string $issuedByName
     */
    #[JsonProperty('issuedByName')]
    public ?string $issuedByName;

    /**
     * @var ?string $issuedByTitle
     */
    #[JsonProperty('issuedByTitle')]
    public ?string $issuedByTitle;

    /**
     * @var ?string $receivedByName
     */
    #[JsonProperty('receivedByName')]
    public ?string $receivedByName;

    /**
     * @var ?string $receivedByTitle
     */
    #[JsonProperty('receivedByTitle')]
    public ?string $receivedByTitle;

    /**
     * @var ?string $lockedAt
     */
    #[JsonProperty('lockedAt')]
    public ?string $lockedAt;

    /**
     * @var ?string $lockedBy
     */
    #[JsonProperty('lockedBy')]
    public ?string $lockedBy;

    /**
     * @var ?string $payToken
     */
    #[JsonProperty('payToken')]
    public ?string $payToken;

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
     * @var array<PostV1SalesInvoicesIssueResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1SalesInvoicesIssueResponseLinesItem::class])]
    public array $lines;

    /**
     * @var ?PostV1SalesInvoicesIssueResponseVatEvidence $vatEvidence
     */
    #[JsonProperty('vatEvidence')]
    public ?PostV1SalesInvoicesIssueResponseVatEvidence $vatEvidence;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   type: value-of<PostV1SalesInvoicesIssueResponseType>,
     *   status: value-of<PostV1SalesInvoicesIssueResponseStatus>,
     *   paymentStatus: value-of<PostV1SalesInvoicesIssueResponsePaymentStatus>,
     *   currency: string,
     *   netTotal: string,
     *   vatTotal: string,
     *   grossTotal: string,
     *   paidAmount: string,
     *   deemedSupplier: bool,
     *   discountPercent: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   lines: array<PostV1SalesInvoicesIssueResponseLinesItem>,
     *   series?: ?string,
     *   number?: ?int,
     *   fullNumber?: ?string,
     *   issueDate?: ?string,
     *   dueDate?: ?string,
     *   journalTransactionId?: ?string,
     *   appliedToInvoiceId?: ?string,
     *   creditedInvoiceId?: ?string,
     *   agreementId?: ?string,
     *   vatScheme?: ?value-of<PostV1SalesInvoicesIssueResponseVatScheme>,
     *   vatCountryCode?: ?string,
     *   notes?: ?string,
     *   documentRef?: ?string,
     *   operationTypeId?: ?string,
     *   documentSeriesId?: ?string,
     *   seriesLabel?: ?string,
     *   orderNumber?: ?string,
     *   issuedByName?: ?string,
     *   issuedByTitle?: ?string,
     *   receivedByName?: ?string,
     *   receivedByTitle?: ?string,
     *   lockedAt?: ?string,
     *   lockedBy?: ?string,
     *   payToken?: ?string,
     *   vatEvidence?: ?PostV1SalesInvoicesIssueResponseVatEvidence,
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
        $this->documentRef = $values['documentRef'] ?? null;
        $this->operationTypeId = $values['operationTypeId'] ?? null;
        $this->documentSeriesId = $values['documentSeriesId'] ?? null;
        $this->seriesLabel = $values['seriesLabel'] ?? null;
        $this->discountPercent = $values['discountPercent'];
        $this->orderNumber = $values['orderNumber'] ?? null;
        $this->issuedByName = $values['issuedByName'] ?? null;
        $this->issuedByTitle = $values['issuedByTitle'] ?? null;
        $this->receivedByName = $values['receivedByName'] ?? null;
        $this->receivedByTitle = $values['receivedByTitle'] ?? null;
        $this->lockedAt = $values['lockedAt'] ?? null;
        $this->lockedBy = $values['lockedBy'] ?? null;
        $this->payToken = $values['payToken'] ?? null;
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
