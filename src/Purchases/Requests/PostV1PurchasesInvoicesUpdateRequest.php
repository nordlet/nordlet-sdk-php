<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Purchases\Types\PostV1PurchasesInvoicesUpdateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1PurchasesInvoicesUpdateRequest extends JsonSerializableType
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
     * @var ?string $documentDate
     */
    #[JsonProperty('documentDate')]
    public ?string $documentDate;

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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?array<PostV1PurchasesInvoicesUpdateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1PurchasesInvoicesUpdateRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @param array{
     *   id: string,
     *   partnerId?: ?string,
     *   documentNumber?: ?string,
     *   documentDate?: ?string,
     *   dueDate?: ?string,
     *   currency?: ?string,
     *   notes?: ?string,
     *   lines?: ?array<PostV1PurchasesInvoicesUpdateRequestLinesItem>,
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
        $this->notes = $values['notes'] ?? null;
        $this->lines = $values['lines'] ?? null;
    }
}
