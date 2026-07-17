<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Purchases\Types\PostV1PurchasesInvoicesCreateRequestType;
use Nordlet\Purchases\Types\PostV1PurchasesInvoicesCreateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1PurchasesInvoicesCreateRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?value-of<PostV1PurchasesInvoicesCreateRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var array<PostV1PurchasesInvoicesCreateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1PurchasesInvoicesCreateRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   partnerId: string,
     *   documentNumber: string,
     *   documentDate: string,
     *   lines: array<PostV1PurchasesInvoicesCreateRequestLinesItem>,
     *   type?: ?value-of<PostV1PurchasesInvoicesCreateRequestType>,
     *   dueDate?: ?string,
     *   currency?: ?string,
     *   creditedInvoiceId?: ?string,
     *   notes?: ?string,
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
        $this->notes = $values['notes'] ?? null;
        $this->lines = $values['lines'];
    }
}
