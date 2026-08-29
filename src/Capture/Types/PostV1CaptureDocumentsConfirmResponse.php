<?php

namespace Nordlet\Capture\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CaptureDocumentsConfirmResponse extends JsonSerializableType
{
    /**
     * @var PostV1CaptureDocumentsConfirmResponseCapture $capture
     */
    #[JsonProperty('capture')]
    public PostV1CaptureDocumentsConfirmResponseCapture $capture;

    /**
     * @var PostV1CaptureDocumentsConfirmResponseInvoice $invoice
     */
    #[JsonProperty('invoice')]
    public PostV1CaptureDocumentsConfirmResponseInvoice $invoice;

    /**
     * @param array{
     *   capture: PostV1CaptureDocumentsConfirmResponseCapture,
     *   invoice: PostV1CaptureDocumentsConfirmResponseInvoice,
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
