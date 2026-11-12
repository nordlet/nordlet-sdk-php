<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Purchases\Types\InvoicesCreatePurchasesRequestType;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Purchases\Types\InvoicesCreatePurchasesRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class InvoicesCreatePurchasesRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?value-of<InvoicesCreatePurchasesRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

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
     * @var ?DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $dueDate;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

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
     * @var array<InvoicesCreatePurchasesRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([InvoicesCreatePurchasesRequestLinesItem::class])]
    public array $lines;

    /**
     * @var ?string $netTotal
     */
    #[JsonProperty('netTotal')]
    public ?string $netTotal;

    /**
     * @var ?string $vatTotal
     */
    #[JsonProperty('vatTotal')]
    public ?string $vatTotal;

    /**
     * @var ?string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public ?string $grossTotal;

    /**
     * @param array{
     *   partnerId: string,
     *   documentNumber: string,
     *   documentDate: DateTime,
     *   lines: array<InvoicesCreatePurchasesRequestLinesItem>,
     *   type?: ?value-of<InvoicesCreatePurchasesRequestType>,
     *   dueDate?: ?DateTime,
     *   currency?: ?string,
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
     *   netTotal?: ?string,
     *   vatTotal?: ?string,
     *   grossTotal?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->type = $values['type'] ?? null;
        $this->documentNumber = $values['documentNumber'];
        $this->documentDate = $values['documentDate'];
        $this->dueDate = $values['dueDate'] ?? null;
        $this->currency = $values['currency'] ?? null;
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
        $this->lines = $values['lines'];
        $this->netTotal = $values['netTotal'] ?? null;
        $this->vatTotal = $values['vatTotal'] ?? null;
        $this->grossTotal = $values['grossTotal'] ?? null;
    }
}
