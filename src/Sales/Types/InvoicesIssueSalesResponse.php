<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesIssueSalesResponse extends JsonSerializableType
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
     * @var value-of<InvoicesIssueSalesResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<InvoicesIssueSalesResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var value-of<InvoicesIssueSalesResponsePaymentStatus> $paymentStatus
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
     * @var ?DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $issueDate;

    /**
     * @var ?DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $dueDate;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?string $fxRate
     */
    #[JsonProperty('fxRate')]
    public ?string $fxRate;

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
     * @var ?string $creditedInvoiceReference
     */
    #[JsonProperty('creditedInvoiceReference')]
    public ?string $creditedInvoiceReference;

    /**
     * @var ?DateTime $creditedInvoiceDate
     */
    #[JsonProperty('creditedInvoiceDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $creditedInvoiceDate;

    /**
     * @var ?string $agreementId
     */
    #[JsonProperty('agreementId')]
    public ?string $agreementId;

    /**
     * @var ?value-of<InvoicesIssueSalesResponseVatScheme> $vatScheme
     */
    #[JsonProperty('vatScheme')]
    public ?string $vatScheme;

    /**
     * @var ?string $intrastatTransportMode
     */
    #[JsonProperty('intrastatTransportMode')]
    public ?string $intrastatTransportMode;

    /**
     * @var ?string $intrastatDeliveryTerms
     */
    #[JsonProperty('intrastatDeliveryTerms')]
    public ?string $intrastatDeliveryTerms;

    /**
     * @var ?string $intrastatRegion
     */
    #[JsonProperty('intrastatRegion')]
    public ?string $intrastatRegion;

    /**
     * @var ?string $intrastatNatureOfTransaction
     */
    #[JsonProperty('intrastatNatureOfTransaction')]
    public ?string $intrastatNatureOfTransaction;

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
     * @var ?DateTime $lockedAt
     */
    #[JsonProperty('lockedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $lockedAt;

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
     * @var ?string $einvoiceSystem
     */
    #[JsonProperty('einvoiceSystem')]
    public ?string $einvoiceSystem;

    /**
     * @var ?string $einvoiceTransport
     */
    #[JsonProperty('einvoiceTransport')]
    public ?string $einvoiceTransport;

    /**
     * @var ?string $einvoiceMessageId
     */
    #[JsonProperty('einvoiceMessageId')]
    public ?string $einvoiceMessageId;

    /**
     * @var ?string $einvoiceNumber
     */
    #[JsonProperty('einvoiceNumber')]
    public ?string $einvoiceNumber;

    /**
     * @var ?string $einvoiceStatus
     */
    #[JsonProperty('einvoiceStatus')]
    public ?string $einvoiceStatus;

    /**
     * @var ?string $einvoiceDetail
     */
    #[JsonProperty('einvoiceDetail')]
    public ?string $einvoiceDetail;

    /**
     * @var ?DateTime $einvoiceSentAt
     */
    #[JsonProperty('einvoiceSentAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $einvoiceSentAt;

    /**
     * @var ?DateTime $einvoiceCheckedAt
     */
    #[JsonProperty('einvoiceCheckedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $einvoiceCheckedAt;

    /**
     * @var ?string $peppolMessageId
     */
    #[JsonProperty('peppolMessageId')]
    public ?string $peppolMessageId;

    /**
     * @var ?string $peppolStatus
     */
    #[JsonProperty('peppolStatus')]
    public ?string $peppolStatus;

    /**
     * @var ?string $peppolDetail
     */
    #[JsonProperty('peppolDetail')]
    public ?string $peppolDetail;

    /**
     * @var ?DateTime $peppolSentAt
     */
    #[JsonProperty('peppolSentAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $peppolSentAt;

    /**
     * @var ?DateTime $peppolCheckedAt
     */
    #[JsonProperty('peppolCheckedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $peppolCheckedAt;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var ?string $advanceAppliedAmount Gross amount of an advance invoice applied to final invoices so far; null on other documents
     */
    #[JsonProperty('advanceAppliedAmount')]
    public ?string $advanceAppliedAmount;

    /**
     * @var array<InvoicesIssueSalesResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([InvoicesIssueSalesResponseLinesItem::class])]
    public array $lines;

    /**
     * @var ?InvoicesIssueSalesResponseVatEvidence $vatEvidence
     */
    #[JsonProperty('vatEvidence')]
    public ?InvoicesIssueSalesResponseVatEvidence $vatEvidence;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   type: value-of<InvoicesIssueSalesResponseType>,
     *   status: value-of<InvoicesIssueSalesResponseStatus>,
     *   paymentStatus: value-of<InvoicesIssueSalesResponsePaymentStatus>,
     *   currency: string,
     *   netTotal: string,
     *   vatTotal: string,
     *   grossTotal: string,
     *   paidAmount: string,
     *   deemedSupplier: bool,
     *   discountPercent: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   lines: array<InvoicesIssueSalesResponseLinesItem>,
     *   series?: ?string,
     *   number?: ?int,
     *   fullNumber?: ?string,
     *   issueDate?: ?DateTime,
     *   dueDate?: ?DateTime,
     *   fxRate?: ?string,
     *   journalTransactionId?: ?string,
     *   appliedToInvoiceId?: ?string,
     *   creditedInvoiceId?: ?string,
     *   creditedInvoiceReference?: ?string,
     *   creditedInvoiceDate?: ?DateTime,
     *   agreementId?: ?string,
     *   vatScheme?: ?value-of<InvoicesIssueSalesResponseVatScheme>,
     *   intrastatTransportMode?: ?string,
     *   intrastatDeliveryTerms?: ?string,
     *   intrastatRegion?: ?string,
     *   intrastatNatureOfTransaction?: ?string,
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
     *   lockedAt?: ?DateTime,
     *   lockedBy?: ?string,
     *   payToken?: ?string,
     *   einvoiceSystem?: ?string,
     *   einvoiceTransport?: ?string,
     *   einvoiceMessageId?: ?string,
     *   einvoiceNumber?: ?string,
     *   einvoiceStatus?: ?string,
     *   einvoiceDetail?: ?string,
     *   einvoiceSentAt?: ?DateTime,
     *   einvoiceCheckedAt?: ?DateTime,
     *   peppolMessageId?: ?string,
     *   peppolStatus?: ?string,
     *   peppolDetail?: ?string,
     *   peppolSentAt?: ?DateTime,
     *   peppolCheckedAt?: ?DateTime,
     *   advanceAppliedAmount?: ?string,
     *   vatEvidence?: ?InvoicesIssueSalesResponseVatEvidence,
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
        $this->fxRate = $values['fxRate'] ?? null;
        $this->netTotal = $values['netTotal'];
        $this->vatTotal = $values['vatTotal'];
        $this->grossTotal = $values['grossTotal'];
        $this->paidAmount = $values['paidAmount'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->appliedToInvoiceId = $values['appliedToInvoiceId'] ?? null;
        $this->creditedInvoiceId = $values['creditedInvoiceId'] ?? null;
        $this->creditedInvoiceReference = $values['creditedInvoiceReference'] ?? null;
        $this->creditedInvoiceDate = $values['creditedInvoiceDate'] ?? null;
        $this->agreementId = $values['agreementId'] ?? null;
        $this->vatScheme = $values['vatScheme'] ?? null;
        $this->intrastatTransportMode = $values['intrastatTransportMode'] ?? null;
        $this->intrastatDeliveryTerms = $values['intrastatDeliveryTerms'] ?? null;
        $this->intrastatRegion = $values['intrastatRegion'] ?? null;
        $this->intrastatNatureOfTransaction = $values['intrastatNatureOfTransaction'] ?? null;
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
        $this->einvoiceSystem = $values['einvoiceSystem'] ?? null;
        $this->einvoiceTransport = $values['einvoiceTransport'] ?? null;
        $this->einvoiceMessageId = $values['einvoiceMessageId'] ?? null;
        $this->einvoiceNumber = $values['einvoiceNumber'] ?? null;
        $this->einvoiceStatus = $values['einvoiceStatus'] ?? null;
        $this->einvoiceDetail = $values['einvoiceDetail'] ?? null;
        $this->einvoiceSentAt = $values['einvoiceSentAt'] ?? null;
        $this->einvoiceCheckedAt = $values['einvoiceCheckedAt'] ?? null;
        $this->peppolMessageId = $values['peppolMessageId'] ?? null;
        $this->peppolStatus = $values['peppolStatus'] ?? null;
        $this->peppolDetail = $values['peppolDetail'] ?? null;
        $this->peppolSentAt = $values['peppolSentAt'] ?? null;
        $this->peppolCheckedAt = $values['peppolCheckedAt'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->advanceAppliedAmount = $values['advanceAppliedAmount'] ?? null;
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
