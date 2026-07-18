<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesRecognitionRunsListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $runDate
     */
    #[JsonProperty('runDate')]
    public string $runDate;

    /**
     * @var value-of<PostV1SalesRecognitionRunsListResponseRowsItemTrigger> $trigger
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
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   runDate: string,
     *   trigger: value-of<PostV1SalesRecognitionRunsListResponseRowsItemTrigger>,
     *   scheduleCount: int,
     *   totalAmount: string,
     *   journalTransactionId: string,
     *   createdAt: string,
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
