<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class DebtRemindersListPartnersResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $sentTo
     */
    #[JsonProperty('sentTo')]
    public string $sentTo;

    /**
     * @var int $invoiceCount
     */
    #[JsonProperty('invoiceCount')]
    public int $invoiceCount;

    /**
     * @var string $totalDue
     */
    #[JsonProperty('totalDue')]
    public string $totalDue;

    /**
     * @var string $interestDue
     */
    #[JsonProperty('interestDue')]
    public string $interestDue;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var array<string> $invoiceIds
     */
    #[JsonProperty('invoiceIds'), ArrayType(['string'])]
    public array $invoiceIds;

    /**
     * @var DateTime $sentAt
     */
    #[JsonProperty('sentAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $sentAt;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   sentTo: string,
     *   invoiceCount: int,
     *   totalDue: string,
     *   interestDue: string,
     *   currency: string,
     *   invoiceIds: array<string>,
     *   sentAt: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'];
        $this->sentTo = $values['sentTo'];
        $this->invoiceCount = $values['invoiceCount'];
        $this->totalDue = $values['totalDue'];
        $this->interestDue = $values['interestDue'];
        $this->currency = $values['currency'];
        $this->invoiceIds = $values['invoiceIds'];
        $this->sentAt = $values['sentAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
