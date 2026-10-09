<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class DeferralsListPurchasesResponseRowsItem extends JsonSerializableType
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
     * @var DateTime $scheduleDate
     */
    #[JsonProperty('scheduleDate'), Date(Date::TYPE_DATE)]
    public DateTime $scheduleDate;

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
     * @var string $expenseAccountCode
     */
    #[JsonProperty('expenseAccountCode')]
    public string $expenseAccountCode;

    /**
     * @var string $prepaidAccountCode
     */
    #[JsonProperty('prepaidAccountCode')]
    public string $prepaidAccountCode;

    /**
     * @var value-of<DeferralsListPurchasesResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @param array{
     *   id: string,
     *   invoiceId: string,
     *   invoiceLineId: string,
     *   scheduleDate: DateTime,
     *   amount: string,
     *   expenseAccountCode: string,
     *   prepaidAccountCode: string,
     *   status: value-of<DeferralsListPurchasesResponseRowsItemStatus>,
     *   description?: ?string,
     *   journalTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->invoiceId = $values['invoiceId'];
        $this->invoiceLineId = $values['invoiceLineId'];
        $this->scheduleDate = $values['scheduleDate'];
        $this->description = $values['description'] ?? null;
        $this->amount = $values['amount'];
        $this->expenseAccountCode = $values['expenseAccountCode'];
        $this->prepaidAccountCode = $values['prepaidAccountCode'];
        $this->status = $values['status'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
