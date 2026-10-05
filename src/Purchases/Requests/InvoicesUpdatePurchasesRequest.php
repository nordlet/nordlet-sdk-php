<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Purchases\Types\InvoicesUpdatePurchasesRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class InvoicesUpdatePurchasesRequest extends JsonSerializableType
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
     * @var ?string $documentNumber
     */
    #[JsonProperty('documentNumber')]
    public ?string $documentNumber;

    /**
     * @var ?DateTime $documentDate
     */
    #[JsonProperty('documentDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $documentDate;

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
     * @var ?array<InvoicesUpdatePurchasesRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([InvoicesUpdatePurchasesRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @param array{
     *   id: string,
     *   partnerId?: ?string,
     *   documentNumber?: ?string,
     *   documentDate?: ?DateTime,
     *   dueDate?: ?DateTime,
     *   currency?: ?string,
     *   purchaseOrderId?: ?string,
     *   operationTypeId?: ?string,
     *   notes?: ?string,
     *   intrastatTransportMode?: ?string,
     *   intrastatDeliveryTerms?: ?string,
     *   intrastatRegion?: ?string,
     *   intrastatNatureOfTransaction?: ?string,
     *   einvoiceNumber?: ?string,
     *   lines?: ?array<InvoicesUpdatePurchasesRequestLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->documentNumber = $values['documentNumber'] ?? null;
        $this->documentDate = $values['documentDate'] ?? null;
        $this->dueDate = $values['dueDate'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->purchaseOrderId = $values['purchaseOrderId'] ?? null;
        $this->operationTypeId = $values['operationTypeId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->intrastatTransportMode = $values['intrastatTransportMode'] ?? null;
        $this->intrastatDeliveryTerms = $values['intrastatDeliveryTerms'] ?? null;
        $this->intrastatRegion = $values['intrastatRegion'] ?? null;
        $this->intrastatNatureOfTransaction = $values['intrastatNatureOfTransaction'] ?? null;
        $this->einvoiceNumber = $values['einvoiceNumber'] ?? null;
        $this->lines = $values['lines'] ?? null;
    }
}
