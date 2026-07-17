<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\PostV1SalesInvoicesUpdateRequestVatScheme;
use Nordlet\Sales\Types\PostV1SalesInvoicesUpdateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesUpdateRequest extends JsonSerializableType
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
     * @var ?value-of<PostV1SalesInvoicesUpdateRequestVatScheme> $vatScheme
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
     * @var ?array<PostV1SalesInvoicesUpdateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1SalesInvoicesUpdateRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @param array{
     *   id: string,
     *   partnerId?: ?string,
     *   currency?: ?string,
     *   issueDate?: ?string,
     *   dueDate?: ?string,
     *   vatScheme?: ?value-of<PostV1SalesInvoicesUpdateRequestVatScheme>,
     *   vatCountryCode?: ?string,
     *   deemedSupplier?: ?bool,
     *   notes?: ?string,
     *   lines?: ?array<PostV1SalesInvoicesUpdateRequestLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->issueDate = $values['issueDate'] ?? null;
        $this->dueDate = $values['dueDate'] ?? null;
        $this->vatScheme = $values['vatScheme'] ?? null;
        $this->vatCountryCode = $values['vatCountryCode'] ?? null;
        $this->deemedSupplier = $values['deemedSupplier'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->lines = $values['lines'] ?? null;
    }
}
