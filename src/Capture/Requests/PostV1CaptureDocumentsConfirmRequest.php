<?php

namespace Nordlet\Capture\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Capture\Types\PostV1CaptureDocumentsConfirmRequestNewSupplier;
use Nordlet\Capture\Types\PostV1CaptureDocumentsConfirmRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1CaptureDocumentsConfirmRequest extends JsonSerializableType
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
     * @var ?PostV1CaptureDocumentsConfirmRequestNewSupplier $newSupplier
     */
    #[JsonProperty('newSupplier')]
    public ?PostV1CaptureDocumentsConfirmRequestNewSupplier $newSupplier;

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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var array<PostV1CaptureDocumentsConfirmRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1CaptureDocumentsConfirmRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   documentNumber: string,
     *   documentDate: string,
     *   lines: array<PostV1CaptureDocumentsConfirmRequestLinesItem>,
     *   partnerId?: ?string,
     *   newSupplier?: ?PostV1CaptureDocumentsConfirmRequestNewSupplier,
     *   dueDate?: ?string,
     *   currency?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->newSupplier = $values['newSupplier'] ?? null;
        $this->documentNumber = $values['documentNumber'];
        $this->documentDate = $values['documentDate'];
        $this->dueDate = $values['dueDate'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->lines = $values['lines'];
    }
}
