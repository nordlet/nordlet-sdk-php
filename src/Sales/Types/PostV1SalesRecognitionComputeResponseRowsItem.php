<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesRecognitionComputeResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $scheduleId
     */
    #[JsonProperty('scheduleId')]
    public string $scheduleId;

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
     * @var ?string $scheduleDate
     */
    #[JsonProperty('scheduleDate')]
    public ?string $scheduleDate;

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
     * @param array{
     *   scheduleId: string,
     *   invoiceId: string,
     *   invoiceLineId: string,
     *   lineDescription: string,
     *   amount: string,
     *   invoiceFullNumber?: ?string,
     *   scheduleDate?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->scheduleId = $values['scheduleId'];
        $this->invoiceId = $values['invoiceId'];
        $this->invoiceFullNumber = $values['invoiceFullNumber'] ?? null;
        $this->invoiceLineId = $values['invoiceLineId'];
        $this->lineDescription = $values['lineDescription'];
        $this->scheduleDate = $values['scheduleDate'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
