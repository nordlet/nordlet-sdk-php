<?php

namespace Nordlet\Cash\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CashOrdersListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1CashOrdersListResponseRowsItemType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $series
     */
    #[JsonProperty('series')]
    public string $series;

    /**
     * @var int $number
     */
    #[JsonProperty('number')]
    public int $number;

    /**
     * @var string $fullNumber
     */
    #[JsonProperty('fullNumber')]
    public string $fullNumber;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $employeeId
     */
    #[JsonProperty('employeeId')]
    public ?string $employeeId;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $purpose
     */
    #[JsonProperty('purpose')]
    public string $purpose;

    /**
     * @var string $cashAccountCode
     */
    #[JsonProperty('cashAccountCode')]
    public string $cashAccountCode;

    /**
     * @var string $counterAccountCode
     */
    #[JsonProperty('counterAccountCode')]
    public string $counterAccountCode;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   type: value-of<PostV1CashOrdersListResponseRowsItemType>,
     *   series: string,
     *   number: int,
     *   fullNumber: string,
     *   date: string,
     *   amount: string,
     *   currency: string,
     *   purpose: string,
     *   cashAccountCode: string,
     *   counterAccountCode: string,
     *   createdAt: string,
     *   partnerId?: ?string,
     *   employeeId?: ?string,
     *   journalTransactionId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->type = $values['type'];
        $this->series = $values['series'];
        $this->number = $values['number'];
        $this->fullNumber = $values['fullNumber'];
        $this->date = $values['date'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->employeeId = $values['employeeId'] ?? null;
        $this->amount = $values['amount'];
        $this->currency = $values['currency'];
        $this->purpose = $values['purpose'];
        $this->cashAccountCode = $values['cashAccountCode'];
        $this->counterAccountCode = $values['counterAccountCode'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->notes = $values['notes'] ?? null;
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
