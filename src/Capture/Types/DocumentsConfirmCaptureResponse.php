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
     * @var ?DocumentsConfirmCaptureResponseOppositeInvoice $oppositeInvoice
     */
    #[JsonProperty('oppositeInvoice')]
    public ?DocumentsConfirmCaptureResponseOppositeInvoice $oppositeInvoice;

    /**
     * @param array{
     *   capture: DocumentsConfirmCaptureResponseCapture,
     *   invoice: DocumentsConfirmCaptureResponseInvoice,
     *   oppositeInvoice?: ?DocumentsConfirmCaptureResponseOppositeInvoice,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->capture = $values['capture'];
        $this->invoice = $values['invoice'];
        $this->oppositeInvoice = $values['oppositeInvoice'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
