<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class RecognitionRunsListSalesResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $runDate
     */
    #[JsonProperty('runDate'), Date(Date::TYPE_DATE)]
    public DateTime $runDate;

    /**
     * @var value-of<RecognitionRunsListSalesResponseRowsItemTrigger> $trigger
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
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   runDate: DateTime,
     *   trigger: value-of<RecognitionRunsListSalesResponseRowsItemTrigger>,
     *   scheduleCount: int,
     *   totalAmount: string,
     *   journalTransactionId: string,
     *   createdAt: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->runDate = $values['runDate'];
        $this->trigger = $values['trigger'];
        $this->scheduleCount = $values['scheduleCount'];
        $this->totalAmount = $values['totalAmount'];
        $this->journalTransactionId = $values['journalTransactionId'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
