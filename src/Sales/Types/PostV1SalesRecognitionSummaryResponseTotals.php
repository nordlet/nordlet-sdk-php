<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesRecognitionSummaryResponseTotals extends JsonSerializableType
{
    /**
     * @var string $deferredTotal
     */
    #[JsonProperty('deferredTotal')]
    public string $deferredTotal;

    /**
     * @var string $recognizedToDate
     */
    #[JsonProperty('recognizedToDate')]
    public string $recognizedToDate;

    /**
     * @var string $remaining
     */
    #[JsonProperty('remaining')]
    public string $remaining;

    /**
     * @param array{
     *   deferredTotal: string,
     *   recognizedToDate: string,
     *   remaining: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->deferredTotal = $values['deferredTotal'];
        $this->recognizedToDate = $values['recognizedToDate'];
        $this->remaining = $values['remaining'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
