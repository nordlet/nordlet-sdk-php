<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class RecognitionRunSalesResponse extends JsonSerializableType
{
    /**
     * @var string $runId
     */
    #[JsonProperty('runId')]
    public string $runId;

    /**
     * @var DateTime $runDate
     */
    #[JsonProperty('runDate'), Date(Date::TYPE_DATE)]
    public DateTime $runDate;

    /**
     * @var value-of<RecognitionRunSalesResponseTrigger> $trigger
     */
    #[JsonProperty('trigger')]
    public string $trigger;

    /**
     * @var int $scheduleCount
     */
    #[JsonProperty('scheduleCount')]
    public int $scheduleCount;

    /**
     * @var string $totalAmount
     */
    #[JsonProperty('totalAmount')]
    public string $totalAmount;

    /**
     * @var string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public string $journalTransactionId;

    /**
     * @param array{
     *   runId: string,
     *   runDate: DateTime,
     *   trigger: value-of<RecognitionRunSalesResponseTrigger>,
     *   scheduleCount: int,
     *   totalAmount: string,
     *   journalTransactionId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->runId = $values['runId'];
        $this->runDate = $values['runDate'];
        $this->trigger = $values['trigger'];
        $this->scheduleCount = $values['scheduleCount'];
        $this->totalAmount = $values['totalAmount'];
        $this->journalTransactionId = $values['journalTransactionId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
