<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\InvoicesCreateSalesRequestType;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Sales\Types\InvoicesCreateSalesRequestVatScheme;
use Nordlet\Sales\Types\InvoicesCreateSalesRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class InvoicesCreateSalesRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?value-of<InvoicesCreateSalesRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

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
     * @var ?string $creditedInvoiceId
     */
    #[JsonProperty('creditedInvoiceId')]
    public ?string $creditedInvoiceId;

    /**
     * @var ?string $creditedInvoiceReference Number of an original invoice issued outside Nordlet; give it with creditedInvoiceDate
     */
    #[JsonProperty('creditedInvoiceReference')]
    public ?string $creditedInvoiceReference;

    /**
     * @var ?DateTime $creditedInvoiceDate Issue date of the original invoice issued outside Nordlet
     */
    #[JsonProperty('creditedInvoiceDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $creditedInvoiceDate;

    /**
     * @var ?string $agreementId
     */
    #[JsonProperty('agreementId')]
    public ?string $agreementId;

    /**
     * @var ?value-of<InvoicesCreateSalesRequestVatScheme> $vatScheme
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
     * @var ?bool $deemedSupplier
     */
    #[JsonProperty('deemedSupplier')]
    public ?bool $deemedSupplier;

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
     * @var ?string $discountPercent
     */
    #[JsonProperty('discountPercent')]
    public ?string $discountPercent;

    /**
     * @var array<InvoicesCreateSalesRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([InvoicesCreateSalesRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   partnerId: string,
     *   lines: array<InvoicesCreateSalesRequestLinesItem>,
     *   type?: ?value-of<InvoicesCreateSalesRequestType>,
     *   currency?: ?string,
     *   issueDate?: ?DateTime,
     *   dueDate?: ?DateTime,
     *   creditedInvoiceId?: ?string,
     *   creditedInvoiceReference?: ?string,
     *   creditedInvoiceDate?: ?DateTime,
     *   agreementId?: ?string,
     *   vatScheme?: ?value-of<InvoicesCreateSalesRequestVatScheme>,
     *   intrastatTransportMode?: ?string,
     *   intrastatDeliveryTerms?: ?string,
     *   intrastatRegion?: ?string,
     *   intrastatNatureOfTransaction?: ?string,
     *   vatCountryCode?: ?string,
     *   deemedSupplier?: ?bool,
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
     *   discountPercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->type = $values['type'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->issueDate = $values['issueDate'] ?? null;
        $this->dueDate = $values['dueDate'] ?? null;
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
        $this->deemedSupplier = $values['deemedSupplier'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
        $this->operationTypeId = $values['operationTypeId'] ?? null;
        $this->documentSeriesId = $values['documentSeriesId'] ?? null;
        $this->seriesLabel = $values['seriesLabel'] ?? null;
        $this->orderNumber = $values['orderNumber'] ?? null;
        $this->issuedByName = $values['issuedByName'] ?? null;
        $this->issuedByTitle = $values['issuedByTitle'] ?? null;
        $this->receivedByName = $values['receivedByName'] ?? null;
        $this->receivedByTitle = $values['receivedByTitle'] ?? null;
        $this->discountPercent = $values['discountPercent'] ?? null;
        $this->lines = $values['lines'];
    }
}
