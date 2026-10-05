<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class RecognitionSummarySalesResponseTotals extends JsonSerializableType
{
    /**
     * @var string $deferredTotal
     */
    #[JsonProperty('deferredTotal')]
    public string $deferredTotal;

    /**
     * @var DateTime $recognizedToDate
     */
    #[JsonProperty('recognizedToDate'), Date(Date::TYPE_DATE)]
    public DateTime $recognizedToDate;

    /**
     * @var string $remaining
     */
    #[JsonProperty('remaining')]
    public string $remaining;

    /**
     * @param array{
     *   deferredTotal: string,
     *   recognizedToDate: DateTime,
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
