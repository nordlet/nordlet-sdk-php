<?php

namespace Nordlet\Cash\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Cash\Types\ExpenseReportsCreateCashRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class ExpenseReportsCreateCashRequest extends JsonSerializableType
{
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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var array<ExpenseReportsCreateCashRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([ExpenseReportsCreateCashRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   employeeId: string,
     *   date: DateTime,
     *   lines: array<ExpenseReportsCreateCashRequestLinesItem>,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->date = $values['date'];
        $this->notes = $values['notes'] ?? null;
        $this->lines = $values['lines'];
    }
}
