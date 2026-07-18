<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesRecognitionProgressRequest extends JsonSerializableType
{
    /**
     * @var string $invoiceLineId
     */
    #[JsonProperty('invoiceLineId')]
    public string $invoiceLineId;

    /**
     * @var string $percentComplete
     */
    #[JsonProperty('percentComplete')]
    public string $percentComplete;

    /**
     * @var ?string $date
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @param array{
     *   invoiceLineId: string,
     *   percentComplete: string,
     *   date?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceLineId = $values['invoiceLineId'];
        $this->percentComplete = $values['percentComplete'];
        $this->date = $values['date'] ?? null;
    }
}
