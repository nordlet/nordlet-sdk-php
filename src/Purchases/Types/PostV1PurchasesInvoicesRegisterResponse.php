<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1PurchasesInvoicesRegisterResponse extends JsonSerializableType
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
     * @var value-of<PostV1PurchasesInvoicesRegisterResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<PostV1PurchasesInvoicesRegisterResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var value-of<PostV1PurchasesInvoicesRegisterResponsePaymentStatus> $paymentStatus
     */
    #[JsonProperty('paymentStatus')]
    public string $paymentStatus;

    /**
     * @var string $documentNumber
     */
    #[JsonProperty('documentNumber')]
    public string $documentNumber;

    /**
     * @var string $documentDate
     */
    #[JsonProperty('documentDate')]
    public string $documentDate;

    /**
     * @var ?string $dueDate
     */
    #[JsonProperty('dueDate')]
    public ?string $dueDate;

    /**
     * @var ?string $registrationDate
     */
    #[JsonProperty('registrationDate')]
    public ?string $registrationDate;

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
     * @var ?string $creditedInvoiceId
     */
    #[JsonProperty('creditedInvoiceId')]
    public ?string $creditedInvoiceId;

    /**
     * @var ?string $purchaseOrderId
     */
    #[JsonProperty('purchaseOrderId')]
    public ?string $purchaseOrderId;

    /**
     * @var ?string $operationTypeId
     */
    #[JsonProperty('operationTypeId')]
    public ?string $operationTypeId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

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
     * @var ?string $einvoiceNumber
     */
    #[JsonProperty('einvoiceNumber')]
    public ?string $einvoiceNumber;

    /**
     * @var ?string $documentRef
     */
    #[JsonProperty('documentRef')]
    public ?string $documentRef;

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
     * @var array<PostV1PurchasesInvoicesRegisterResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1PurchasesInvoicesRegisterResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   type: value-of<PostV1PurchasesInvoicesRegisterResponseType>,
     *   status: value-of<PostV1PurchasesInvoicesRegisterResponseStatus>,
     *   paymentStatus: value-of<PostV1PurchasesInvoicesRegisterResponsePaymentStatus>,
     *   documentNumber: string,
     *   documentDate: string,
     *   currency: string,
     *   netTotal: string,
     *   vatTotal: string,
     *   grossTotal: string,
     *   paidAmount: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   lines: array<PostV1PurchasesInvoicesRegisterResponseLinesItem>,
     *   dueDate?: ?string,
     *   registrationDate?: ?string,
     *   journalTransactionId?: ?string,
     *   creditedInvoiceId?: ?string,
     *   purchaseOrderId?: ?string,
     *   operationTypeId?: ?string,
     *   notes?: ?string,
     *   intrastatTransportMode?: ?string,
     *   intrastatDeliveryTerms?: ?string,
     *   intrastatRegion?: ?string,
     *   intrastatNatureOfTransaction?: ?string,
     *   einvoiceNumber?: ?string,
     *   documentRef?: ?string,
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
        $this->documentNumber = $values['documentNumber'];
        $this->documentDate = $values['documentDate'];
        $this->dueDate = $values['dueDate'] ?? null;
        $this->registrationDate = $values['registrationDate'] ?? null;
        $this->currency = $values['currency'];
        $this->netTotal = $values['netTotal'];
        $this->vatTotal = $values['vatTotal'];
        $this->grossTotal = $values['grossTotal'];
        $this->paidAmount = $values['paidAmount'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->creditedInvoiceId = $values['creditedInvoiceId'] ?? null;
        $this->purchaseOrderId = $values['purchaseOrderId'] ?? null;
        $this->operationTypeId = $values['operationTypeId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->intrastatTransportMode = $values['intrastatTransportMode'] ?? null;
        $this->intrastatDeliveryTerms = $values['intrastatDeliveryTerms'] ?? null;
        $this->intrastatRegion = $values['intrastatRegion'] ?? null;
        $this->intrastatNatureOfTransaction = $values['intrastatNatureOfTransaction'] ?? null;
        $this->einvoiceNumber = $values['einvoiceNumber'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
