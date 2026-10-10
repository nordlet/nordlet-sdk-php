<?php

namespace Nordlet\Capture\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class DocumentsUploadCaptureResponseExtraction extends JsonSerializableType
{
    /**
     * @var ?value-of<DocumentsUploadCaptureResponseExtractionDocumentType> $documentType
     */
    #[JsonProperty('documentType')]
    public ?string $documentType;

    /**
     * @var DocumentsUploadCaptureResponseExtractionSupplier $supplier
     */
    #[JsonProperty('supplier')]
    public DocumentsUploadCaptureResponseExtractionSupplier $supplier;

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
     * @var array<DocumentsUploadCaptureResponseExtractionLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([DocumentsUploadCaptureResponseExtractionLinesItem::class])]
    public array $lines;

    /**
     * @var ?array<DocumentsUploadCaptureResponseExtractionOppositeLinesItem> $oppositeLines
     */
    #[JsonProperty('oppositeLines'), ArrayType([DocumentsUploadCaptureResponseExtractionOppositeLinesItem::class])]
    public ?array $oppositeLines;

    /**
     * @param array{
     *   supplier: DocumentsUploadCaptureResponseExtractionSupplier,
     *   lines: array<DocumentsUploadCaptureResponseExtractionLinesItem>,
     *   documentType?: ?value-of<DocumentsUploadCaptureResponseExtractionDocumentType>,
     *   documentNumber?: ?string,
     *   documentDate?: ?DateTime,
     *   dueDate?: ?DateTime,
     *   currency?: ?string,
     *   netTotal?: ?string,
     *   vatTotal?: ?string,
     *   grossTotal?: ?string,
     *   notes?: ?string,
     *   oppositeLines?: ?array<DocumentsUploadCaptureResponseExtractionOppositeLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentType = $values['documentType'] ?? null;
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
        $this->oppositeLines = $values['oppositeLines'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
