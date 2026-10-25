<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Sales\Types\InvoicesUpdateSalesRequestVatScheme;
use Nordlet\Sales\Types\InvoicesUpdateSalesRequestLocale;
use Nordlet\Sales\Types\InvoicesUpdateSalesRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class InvoicesUpdateSalesRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $agreementId
     */
    #[JsonProperty('agreementId')]
    public ?string $agreementId;

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
     * @var ?value-of<InvoicesUpdateSalesRequestVatScheme> $vatScheme
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
     * @var ?value-of<InvoicesUpdateSalesRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @var ?bool $payLinkEnabled
     */
    #[JsonProperty('payLinkEnabled')]
    public ?bool $payLinkEnabled;

    /**
     * @var ?bool $debtRemindersEnabled
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
     * @var ?string $discountPercent
     */
    #[JsonProperty('discountPercent')]
    public ?string $discountPercent;

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
     * @var ?string $salesTaxPercent
     */
    #[JsonProperty('salesTaxPercent')]
    public ?string $salesTaxPercent;

    /**
     * @var ?array<InvoicesUpdateSalesRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([InvoicesUpdateSalesRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @param array{
     *   id: string,
     *   partnerId?: ?string,
     *   agreementId?: ?string,
     *   currency?: ?string,
     *   issueDate?: ?DateTime,
     *   dueDate?: ?DateTime,
     *   vatScheme?: ?value-of<InvoicesUpdateSalesRequestVatScheme>,
     *   intrastatTransportMode?: ?string,
     *   intrastatDeliveryTerms?: ?string,
     *   intrastatRegion?: ?string,
     *   intrastatNatureOfTransaction?: ?string,
     *   vatCountryCode?: ?string,
     *   deemedSupplier?: ?bool,
     *   notes?: ?string,
     *   locale?: ?value-of<InvoicesUpdateSalesRequestLocale>,
     *   payLinkEnabled?: ?bool,
     *   debtRemindersEnabled?: ?bool,
     *   operationTypeId?: ?string,
     *   documentSeriesId?: ?string,
     *   seriesLabel?: ?string,
     *   discountPercent?: ?string,
     *   orderNumber?: ?string,
     *   issuedByName?: ?string,
     *   issuedByTitle?: ?string,
     *   receivedByName?: ?string,
     *   receivedByTitle?: ?string,
     *   salesTaxPercent?: ?string,
     *   lines?: ?array<InvoicesUpdateSalesRequestLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->agreementId = $values['agreementId'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->issueDate = $values['issueDate'] ?? null;
        $this->dueDate = $values['dueDate'] ?? null;
        $this->vatScheme = $values['vatScheme'] ?? null;
        $this->intrastatTransportMode = $values['intrastatTransportMode'] ?? null;
        $this->intrastatDeliveryTerms = $values['intrastatDeliveryTerms'] ?? null;
        $this->intrastatRegion = $values['intrastatRegion'] ?? null;
        $this->intrastatNatureOfTransaction = $values['intrastatNatureOfTransaction'] ?? null;
        $this->vatCountryCode = $values['vatCountryCode'] ?? null;
        $this->deemedSupplier = $values['deemedSupplier'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->locale = $values['locale'] ?? null;
        $this->payLinkEnabled = $values['payLinkEnabled'] ?? null;
        $this->debtRemindersEnabled = $values['debtRemindersEnabled'] ?? null;
        $this->operationTypeId = $values['operationTypeId'] ?? null;
        $this->documentSeriesId = $values['documentSeriesId'] ?? null;
        $this->seriesLabel = $values['seriesLabel'] ?? null;
        $this->discountPercent = $values['discountPercent'] ?? null;
        $this->orderNumber = $values['orderNumber'] ?? null;
        $this->issuedByName = $values['issuedByName'] ?? null;
        $this->issuedByTitle = $values['issuedByTitle'] ?? null;
        $this->receivedByName = $values['receivedByName'] ?? null;
        $this->receivedByTitle = $values['receivedByTitle'] ?? null;
        $this->salesTaxPercent = $values['salesTaxPercent'] ?? null;
        $this->lines = $values['lines'] ?? null;
    }
}
