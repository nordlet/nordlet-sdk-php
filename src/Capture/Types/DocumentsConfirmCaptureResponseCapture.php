<?php

namespace Nordlet\Capture\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class DocumentsConfirmCaptureResponseCapture extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $fileId
     */
    #[JsonProperty('fileId')]
    public string $fileId;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $mimeType
     */
    #[JsonProperty('mimeType')]
    public string $mimeType;

    /**
     * @var int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public int $sizeBytes;

    /**
     * @var value-of<DocumentsConfirmCaptureResponseCaptureStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $provider
     */
    #[JsonProperty('provider')]
    public ?string $provider;

    /**
     * @var ?string $model
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?int $pagesProcessed
     */
    #[JsonProperty('pagesProcessed')]
    public ?int $pagesProcessed;

    /**
     * @var ?DocumentsConfirmCaptureResponseCaptureExtraction $extraction
     */
    #[JsonProperty('extraction')]
    public ?DocumentsConfirmCaptureResponseCaptureExtraction $extraction;

    /**
     * @var ?string $matchedPartnerId
     */
    #[JsonProperty('matchedPartnerId')]
    public ?string $matchedPartnerId;

    /**
     * @var ?string $purchaseInvoiceId
     */
    #[JsonProperty('purchaseInvoiceId')]
    public ?string $purchaseInvoiceId;

    /**
     * @var ?string $error
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   fileId: string,
     *   fileName: string,
     *   mimeType: string,
     *   sizeBytes: int,
     *   status: value-of<DocumentsConfirmCaptureResponseCaptureStatus>,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   provider?: ?string,
     *   model?: ?string,
     *   pagesProcessed?: ?int,
     *   extraction?: ?DocumentsConfirmCaptureResponseCaptureExtraction,
     *   matchedPartnerId?: ?string,
     *   purchaseInvoiceId?: ?string,
     *   error?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->fileId = $values['fileId'];
        $this->fileName = $values['fileName'];
        $this->mimeType = $values['mimeType'];
        $this->sizeBytes = $values['sizeBytes'];
        $this->status = $values['status'];
        $this->provider = $values['provider'] ?? null;
        $this->model = $values['model'] ?? null;
        $this->pagesProcessed = $values['pagesProcessed'] ?? null;
        $this->extraction = $values['extraction'] ?? null;
        $this->matchedPartnerId = $values['matchedPartnerId'] ?? null;
        $this->purchaseInvoiceId = $values['purchaseInvoiceId'] ?? null;
        $this->error = $values['error'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
