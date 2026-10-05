<?php

namespace Nordlet\Capture\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DocumentsConfirmCaptureResponse extends JsonSerializableType
{
    /**
     * @var DocumentsConfirmCaptureResponseCapture $capture
     */
    #[JsonProperty('capture')]
    public DocumentsConfirmCaptureResponseCapture $capture;

    /**
     * @var DocumentsConfirmCaptureResponseInvoice $invoice
     */
    #[JsonProperty('invoice')]
    public DocumentsConfirmCaptureResponseInvoice $invoice;

    /**
     * @param array{
     *   capture: DocumentsConfirmCaptureResponseCapture,
     *   invoice: DocumentsConfirmCaptureResponseInvoice,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->capture = $values['capture'];
        $this->invoice = $values['invoice'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
