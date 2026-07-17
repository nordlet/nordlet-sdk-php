<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Payroll\Types\PostV1PayrollRunsCreateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1PayrollRunsCreateRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var ?array<PostV1PayrollRunsCreateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1PayrollRunsCreateRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   lines?: ?array<PostV1PayrollRunsCreateRequestLinesItem>,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->lines = $values['lines'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
