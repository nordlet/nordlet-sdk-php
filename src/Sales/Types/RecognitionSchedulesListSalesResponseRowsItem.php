<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class RecognitionSchedulesListSalesResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var string $invoiceLineId
     */
    #[JsonProperty('invoiceLineId')]
    public string $invoiceLineId;

    /**
     * @var value-of<RecognitionSchedulesListSalesResponseRowsItemMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var value-of<RecognitionSchedulesListSalesResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?DateTime $scheduleDate
     */
    #[JsonProperty('scheduleDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $scheduleDate;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var ?DateTime $recognizedAt
     */
    #[JsonProperty('recognizedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $recognizedAt;

    /**
     * @var int $sortOrder
     */
    #[JsonProperty('sortOrder')]
    public int $sortOrder;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   invoiceId: string,
     *   invoiceLineId: string,
     *   method: value-of<RecognitionSchedulesListSalesResponseRowsItemMethod>,
     *   status: value-of<RecognitionSchedulesListSalesResponseRowsItemStatus>,
     *   amount: string,
     *   sortOrder: int,
     *   createdAt: DateTime,
     *   scheduleDate?: ?DateTime,
     *   description?: ?string,
     *   journalTransactionId?: ?string,
     *   recognizedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->invoiceId = $values['invoiceId'];
        $this->invoiceLineId = $values['invoiceLineId'];
        $this->method = $values['method'];
        $this->status = $values['status'];
        $this->scheduleDate = $values['scheduleDate'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->amount = $values['amount'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->recognizedAt = $values['recognizedAt'] ?? null;
        $this->sortOrder = $values['sortOrder'];
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
