<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersDebtRemindersPreviewResponseRowsItemInvoicesItem extends JsonSerializableType
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
     * @var string $issueDate
     */
    #[JsonProperty('issueDate')]
    public string $issueDate;

    /**
     * @var string $dueDate
     */
    #[JsonProperty('dueDate')]
    public string $dueDate;

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
     *   issueDate: string,
     *   dueDate: string,
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
