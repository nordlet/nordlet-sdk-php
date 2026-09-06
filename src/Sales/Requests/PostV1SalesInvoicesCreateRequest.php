<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\PostV1SalesInvoicesCreateRequestType;
use Nordlet\Sales\Types\PostV1SalesInvoicesCreateRequestVatScheme;
use Nordlet\Sales\Types\PostV1SalesInvoicesCreateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesCreateRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?value-of<PostV1SalesInvoicesCreateRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

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
     * @var ?string $creditedInvoiceId
     */
    #[JsonProperty('creditedInvoiceId')]
    public ?string $creditedInvoiceId;

    /**
     * @var ?value-of<PostV1SalesInvoicesCreateRequestVatScheme> $vatScheme
     */
    #[JsonProperty('vatScheme')]
    public ?string $vatScheme;

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
     * @var array<PostV1SalesInvoicesCreateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1SalesInvoicesCreateRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   partnerId: string,
     *   lines: array<PostV1SalesInvoicesCreateRequestLinesItem>,
     *   type?: ?value-of<PostV1SalesInvoicesCreateRequestType>,
     *   currency?: ?string,
     *   issueDate?: ?string,
     *   dueDate?: ?string,
     *   creditedInvoiceId?: ?string,
     *   vatScheme?: ?value-of<PostV1SalesInvoicesCreateRequestVatScheme>,
     *   vatCountryCode?: ?string,
     *   deemedSupplier?: ?bool,
     *   notes?: ?string,
     *   documentRef?: ?string,
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
        $this->vatScheme = $values['vatScheme'] ?? null;
        $this->vatCountryCode = $values['vatCountryCode'] ?? null;
        $this->deemedSupplier = $values['deemedSupplier'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
        $this->lines = $values['lines'];
    }
}
