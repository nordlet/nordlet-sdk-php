<?php

namespace Nordlet\Capture\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Capture\Types\DocumentsConfirmCaptureRequestNewSupplier;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Capture\Types\DocumentsConfirmCaptureRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class DocumentsConfirmCaptureRequest extends JsonSerializableType
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
     * @var ?DocumentsConfirmCaptureRequestNewSupplier $newSupplier
     */
    #[JsonProperty('newSupplier')]
    public ?DocumentsConfirmCaptureRequestNewSupplier $newSupplier;

    /**
     * @var string $documentNumber
     */
    #[JsonProperty('documentNumber')]
    public string $documentNumber;

    /**
     * @var DateTime $documentDate
     */
    #[JsonProperty('documentDate'), Date(Date::TYPE_DATE)]
    public DateTime $documentDate;

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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var array<DocumentsConfirmCaptureRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([DocumentsConfirmCaptureRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   documentNumber: string,
     *   documentDate: DateTime,
     *   lines: array<DocumentsConfirmCaptureRequestLinesItem>,
     *   partnerId?: ?string,
     *   newSupplier?: ?DocumentsConfirmCaptureRequestNewSupplier,
     *   dueDate?: ?DateTime,
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
