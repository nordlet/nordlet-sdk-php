<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesRecognitionSummaryRequest extends JsonSerializableType
{
    /**
     * @var ?string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public ?string $invoiceId;

    /**
     * @param array{
     *   invoiceId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->invoiceId = $values['invoiceId'] ?? null;
    }
}
