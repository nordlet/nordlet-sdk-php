<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class RecognitionModifySalesResponse extends JsonSerializableType
{
    /**
     * @var string $invoiceLineId
     */
    #[JsonProperty('invoiceLineId')]
    public string $invoiceLineId;

    /**
     * @var value-of<RecognitionModifySalesResponseApproach> $approach
     */
    #[JsonProperty('approach')]
    public string $approach;

    /**
     * @var int $cancelledCount
     */
    #[JsonProperty('cancelledCount')]
    public int $cancelledCount;

    /**
     * @var int $newPendingCount
     */
    #[JsonProperty('newPendingCount')]
    public int $newPendingCount;

    /**
     * @var string $catchUpAmount
     */
    #[JsonProperty('catchUpAmount')]
    public string $catchUpAmount;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var ?DateTime $newEndDate
     */
    #[JsonProperty('newEndDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $newEndDate;

    /**
     * @param array{
     *   invoiceLineId: string,
     *   approach: value-of<RecognitionModifySalesResponseApproach>,
     *   cancelledCount: int,
     *   newPendingCount: int,
     *   catchUpAmount: string,
     *   journalTransactionId?: ?string,
     *   newEndDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceLineId = $values['invoiceLineId'];
        $this->approach = $values['approach'];
        $this->cancelledCount = $values['cancelledCount'];
        $this->newPendingCount = $values['newPendingCount'];
        $this->catchUpAmount = $values['catchUpAmount'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->newEndDate = $values['newEndDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
