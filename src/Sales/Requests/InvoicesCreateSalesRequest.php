<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\InvoicesCreateSalesRequestType;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Sales\Types\InvoicesCreateSalesRequestVatScheme;
use Nordlet\Sales\Types\InvoicesCreateSalesRequestLocale;
use Nordlet\Sales\Types\InvoicesCreateSalesRequestDeliveryAddress;
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
     * @var ?value-of<InvoicesCreateSalesRequestLocale> $locale Language of the PDF and of the e-mail the invoice is sent with; unset means the language asked for when the PDF is made
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @var ?bool $payLinkEnabled Whether the PDF and the e-mail carry the payment link of the company payment link template
     */
    #[JsonProperty('payLinkEnabled')]
    public ?bool $payLinkEnabled;

    /**
     * @var ?bool $debtRemindersEnabled Whether automatic debt reminders include this invoice when its partner has them turned on
     */
    #[JsonProperty('debtRemindersEnabled')]
    public ?bool $debtRemindersEnabled;

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
     * @var ?string $salesTaxPercent Sales tax as a percent of the net total, added to the document total and posted to the sales tax payable account when the document is issued. US companies only (422 otherwise); invoices and credit notes only.
     */
    #[JsonProperty('salesTaxPercent')]
    public ?string $salesTaxPercent;

    /**
     * @var ?string $salesTaxJurisdiction The US state the sales tax is collected for, as an ISO 3166-2 code such as `US-CA`; unset means the state of `deliveryAddress` (422 when it has none), else the credited invoice's state for a credit note, else the state of the customer's address (422 without one). When the customer has a certificate of exemption for that state (`partners/sales-tax-exemptions/create`) that covers the sale, no sales tax is charged and the document keeps the certificate's id in `salesTaxExemptionId`.
     */
    #[JsonProperty('salesTaxJurisdiction')]
    public ?string $salesTaxJurisdiction;

    /**
     * @var ?InvoicesCreateSalesRequestDeliveryAddress $deliveryAddress Where the goods or services are delivered, when not at the customer's address; it decides the state of the sales tax when `salesTaxJurisdiction` is not given.
     */
    #[JsonProperty('deliveryAddress')]
    public ?InvoicesCreateSalesRequestDeliveryAddress $deliveryAddress;

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
     *   locale?: ?value-of<InvoicesCreateSalesRequestLocale>,
     *   payLinkEnabled?: ?bool,
     *   debtRemindersEnabled?: ?bool,
     *   operationTypeId?: ?string,
     *   documentSeriesId?: ?string,
     *   seriesLabel?: ?string,
     *   orderNumber?: ?string,
     *   issuedByName?: ?string,
     *   issuedByTitle?: ?string,
     *   receivedByName?: ?string,
     *   receivedByTitle?: ?string,
     *   discountPercent?: ?string,
     *   salesTaxPercent?: ?string,
     *   salesTaxJurisdiction?: ?string,
     *   deliveryAddress?: ?InvoicesCreateSalesRequestDeliveryAddress,
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
        $this->locale = $values['locale'] ?? null;
        $this->payLinkEnabled = $values['payLinkEnabled'] ?? null;
        $this->debtRemindersEnabled = $values['debtRemindersEnabled'] ?? null;
        $this->operationTypeId = $values['operationTypeId'] ?? null;
        $this->documentSeriesId = $values['documentSeriesId'] ?? null;
        $this->seriesLabel = $values['seriesLabel'] ?? null;
        $this->orderNumber = $values['orderNumber'] ?? null;
        $this->issuedByName = $values['issuedByName'] ?? null;
        $this->issuedByTitle = $values['issuedByTitle'] ?? null;
        $this->receivedByName = $values['receivedByName'] ?? null;
        $this->receivedByTitle = $values['receivedByTitle'] ?? null;
        $this->discountPercent = $values['discountPercent'] ?? null;
        $this->salesTaxPercent = $values['salesTaxPercent'] ?? null;
        $this->salesTaxJurisdiction = $values['salesTaxJurisdiction'] ?? null;
        $this->deliveryAddress = $values['deliveryAddress'] ?? null;
        $this->lines = $values['lines'];
    }
}
