<?php

namespace Nordlet\Capture\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1CaptureDocumentsExtractResponseExtraction extends JsonSerializableType
{
    /**
     * @var PostV1CaptureDocumentsExtractResponseExtractionSupplier $supplier
     */
    #[JsonProperty('supplier')]
    public PostV1CaptureDocumentsExtractResponseExtractionSupplier $supplier;

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
     * @var ?string $netTotal
     */
    #[JsonProperty('netTotal')]
    public ?string $netTotal;

    /**
     * @var ?string $vatTotal
     */
    #[JsonProperty('vatTotal')]
    public ?string $vatTotal;

    /**
     * @var ?string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public ?string $grossTotal;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var array<PostV1CaptureDocumentsExtractResponseExtractionLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1CaptureDocumentsExtractResponseExtractionLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   supplier: PostV1CaptureDocumentsExtractResponseExtractionSupplier,
     *   lines: array<PostV1CaptureDocumentsExtractResponseExtractionLinesItem>,
     *   documentNumber?: ?string,
     *   documentDate?: ?string,
     *   dueDate?: ?string,
     *   currency?: ?string,
     *   netTotal?: ?string,
     *   vatTotal?: ?string,
     *   grossTotal?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->supplier = $values['supplier'];
        $this->documentNumber = $values['documentNumber'] ?? null;
        $this->documentDate = $values['documentDate'] ?? null;
        $this->dueDate = $values['dueDate'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->netTotal = $values['netTotal'] ?? null;
        $this->vatTotal = $values['vatTotal'] ?? null;
        $this->grossTotal = $values['grossTotal'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
