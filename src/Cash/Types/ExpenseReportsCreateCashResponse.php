<?php

namespace Nordlet\Cash\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ExpenseReportsCreateCashResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $number
     */
    #[JsonProperty('number')]
    public string $number;

    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $netTotal
     */
    #[JsonProperty('netTotal')]
    public string $netTotal;

    /**
     * @var string $vatTotal
     */
    #[JsonProperty('vatTotal')]
    public string $vatTotal;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

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
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var array<ExpenseReportsCreateCashResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([ExpenseReportsCreateCashResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   number: string,
     *   employeeId: string,
     *   date: DateTime,
     *   netTotal: string,
     *   vatTotal: string,
     *   total: string,
     *   createdAt: DateTime,
     *   lines: array<ExpenseReportsCreateCashResponseLinesItem>,
     *   journalTransactionId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->number = $values['number'];
        $this->employeeId = $values['employeeId'];
        $this->date = $values['date'];
        $this->netTotal = $values['netTotal'];
        $this->vatTotal = $values['vatTotal'];
        $this->total = $values['total'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
