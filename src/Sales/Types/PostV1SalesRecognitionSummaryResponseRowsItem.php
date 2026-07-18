<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesRecognitionSummaryResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var ?string $invoiceFullNumber
     */
    #[JsonProperty('invoiceFullNumber')]
    public ?string $invoiceFullNumber;

    /**
     * @var string $invoiceLineId
     */
    #[JsonProperty('invoiceLineId')]
    public string $invoiceLineId;

    /**
     * @var string $lineDescription
     */
    #[JsonProperty('lineDescription')]
    public string $lineDescription;

    /**
     * @var value-of<PostV1SalesRecognitionSummaryResponseRowsItemMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

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
     * @var int $pendingCount
     */
    #[JsonProperty('pendingCount')]
    public int $pendingCount;

    /**
     * @var ?string $nextScheduleDate
     */
    #[JsonProperty('nextScheduleDate')]
    public ?string $nextScheduleDate;

    /**
     * @param array{
     *   invoiceId: string,
     *   invoiceLineId: string,
     *   lineDescription: string,
     *   method: value-of<PostV1SalesRecognitionSummaryResponseRowsItemMethod>,
     *   deferredTotal: string,
     *   recognizedToDate: string,
     *   remaining: string,
     *   pendingCount: int,
     *   invoiceFullNumber?: ?string,
     *   nextScheduleDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceId = $values['invoiceId'];
        $this->invoiceFullNumber = $values['invoiceFullNumber'] ?? null;
        $this->invoiceLineId = $values['invoiceLineId'];
        $this->lineDescription = $values['lineDescription'];
        $this->method = $values['method'];
        $this->deferredTotal = $values['deferredTotal'];
        $this->recognizedToDate = $values['recognizedToDate'];
        $this->remaining = $values['remaining'];
        $this->pendingCount = $values['pendingCount'];
        $this->nextScheduleDate = $values['nextScheduleDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
