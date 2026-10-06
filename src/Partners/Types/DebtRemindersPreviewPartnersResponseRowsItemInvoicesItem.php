<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class DebtRemindersPreviewPartnersResponseRowsItemInvoicesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $fullNumber
     */
    #[JsonProperty('fullNumber')]
    public string $fullNumber;

    /**
     * @var DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public DateTime $issueDate;

    /**
     * @var DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public DateTime $dueDate;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $remaining
     */
    #[JsonProperty('remaining')]
    public string $remaining;

    /**
     * @var int $daysLate
     */
    #[JsonProperty('daysLate')]
    public int $daysLate;

    /**
     * @var string $interest
     */
    #[JsonProperty('interest')]
    public string $interest;

    /**
     * @param array{
     *   id: string,
     *   fullNumber: string,
     *   issueDate: DateTime,
     *   dueDate: DateTime,
     *   currency: string,
     *   remaining: string,
     *   daysLate: int,
     *   interest: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->fullNumber = $values['fullNumber'];
        $this->issueDate = $values['issueDate'];
        $this->dueDate = $values['dueDate'];
        $this->currency = $values['currency'];
        $this->remaining = $values['remaining'];
        $this->daysLate = $values['daysLate'];
        $this->interest = $values['interest'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
