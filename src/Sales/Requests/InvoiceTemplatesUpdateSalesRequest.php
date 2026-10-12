<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\InvoiceTemplatesUpdateSalesRequestDocumentType;
use Nordlet\Sales\Types\InvoiceTemplatesUpdateSalesRequestVatScheme;
use Nordlet\Sales\Types\InvoiceTemplatesUpdateSalesRequestSupplyType;
use Nordlet\Sales\Types\InvoiceTemplatesUpdateSalesRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class InvoiceTemplatesUpdateSalesRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<InvoiceTemplatesUpdateSalesRequestDocumentType> $documentType
     */
    #[JsonProperty('documentType')]
    public ?string $documentType;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?int $paymentTermDays
     */
    #[JsonProperty('paymentTermDays')]
    public ?int $paymentTermDays;

    /**
     * @var ?value-of<InvoiceTemplatesUpdateSalesRequestVatScheme> $vatScheme
     */
    #[JsonProperty('vatScheme')]
    public ?string $vatScheme;

    /**
     * @var ?string $vatCountryCode
     */
    #[JsonProperty('vatCountryCode')]
    public ?string $vatCountryCode;

    /**
     * @var ?string $agreementId
     */
    #[JsonProperty('agreementId')]
    public ?string $agreementId;

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
     * @var ?string $discountPercent
     */
    #[JsonProperty('discountPercent')]
    public ?string $discountPercent;

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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?value-of<InvoiceTemplatesUpdateSalesRequestSupplyType> $supplyType
     */
    #[JsonProperty('supplyType')]
    public ?string $supplyType;

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
     * @var ?array<InvoiceTemplatesUpdateSalesRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([InvoiceTemplatesUpdateSalesRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @param array{
     *   id: string,
     *   name?: ?string,
     *   documentType?: ?value-of<InvoiceTemplatesUpdateSalesRequestDocumentType>,
     *   partnerId?: ?string,
     *   currency?: ?string,
     *   paymentTermDays?: ?int,
     *   vatScheme?: ?value-of<InvoiceTemplatesUpdateSalesRequestVatScheme>,
     *   vatCountryCode?: ?string,
     *   agreementId?: ?string,
     *   operationTypeId?: ?string,
     *   documentSeriesId?: ?string,
     *   discountPercent?: ?string,
     *   issuedByName?: ?string,
     *   issuedByTitle?: ?string,
     *   receivedByName?: ?string,
     *   receivedByTitle?: ?string,
     *   notes?: ?string,
     *   supplyType?: ?value-of<InvoiceTemplatesUpdateSalesRequestSupplyType>,
     *   seriesLabel?: ?string,
     *   orderNumber?: ?string,
     *   intrastatTransportMode?: ?string,
     *   intrastatDeliveryTerms?: ?string,
     *   intrastatRegion?: ?string,
     *   intrastatNatureOfTransaction?: ?string,
     *   lines?: ?array<InvoiceTemplatesUpdateSalesRequestLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'] ?? null;
        $this->documentType = $values['documentType'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->paymentTermDays = $values['paymentTermDays'] ?? null;
        $this->vatScheme = $values['vatScheme'] ?? null;
        $this->vatCountryCode = $values['vatCountryCode'] ?? null;
        $this->agreementId = $values['agreementId'] ?? null;
        $this->operationTypeId = $values['operationTypeId'] ?? null;
        $this->documentSeriesId = $values['documentSeriesId'] ?? null;
        $this->discountPercent = $values['discountPercent'] ?? null;
        $this->issuedByName = $values['issuedByName'] ?? null;
        $this->issuedByTitle = $values['issuedByTitle'] ?? null;
        $this->receivedByName = $values['receivedByName'] ?? null;
        $this->receivedByTitle = $values['receivedByTitle'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->supplyType = $values['supplyType'] ?? null;
        $this->seriesLabel = $values['seriesLabel'] ?? null;
        $this->orderNumber = $values['orderNumber'] ?? null;
        $this->intrastatTransportMode = $values['intrastatTransportMode'] ?? null;
        $this->intrastatDeliveryTerms = $values['intrastatDeliveryTerms'] ?? null;
        $this->intrastatRegion = $values['intrastatRegion'] ?? null;
        $this->intrastatNatureOfTransaction = $values['intrastatNatureOfTransaction'] ?? null;
        $this->lines = $values['lines'] ?? null;
    }
}
