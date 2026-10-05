<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class RefundLiabilityListSalesResponseRowsItem extends JsonSerializableType
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
     * @var ?string $invoiceFullNumber
     */
    #[JsonProperty('invoiceFullNumber')]
    public ?string $invoiceFullNumber;

    /**
     * @var string $estimated
     */
    #[JsonProperty('estimated')]
    public string $estimated;

    /**
     * @var string $consumed
     */
    #[JsonProperty('consumed')]
    public string $consumed;

    /**
     * @var string $settlementRefunds
     */
    #[JsonProperty('settlementRefunds')]
    public string $settlementRefunds;

    /**
     * @var string $remaining
     */
    #[JsonProperty('remaining')]
    public string $remaining;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   invoiceId: string,
     *   estimated: string,
     *   consumed: string,
     *   settlementRefunds: string,
     *   remaining: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   invoiceFullNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->invoiceId = $values['invoiceId'];
        $this->invoiceFullNumber = $values['invoiceFullNumber'] ?? null;
        $this->estimated = $values['estimated'];
        $this->consumed = $values['consumed'];
        $this->settlementRefunds = $values['settlementRefunds'];
        $this->remaining = $values['remaining'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
