<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Payroll\Types\RunsCreatePayrollRequestGrossOverridesItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Payroll\Types\RunsCreatePayrollRequestLinesItem;

class RunsCreatePayrollRequest extends JsonSerializableType
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
     * @var ?bool $includeNatura
     */
    #[JsonProperty('includeNatura')]
    public ?bool $includeNatura;

    /**
     * @var ?array<RunsCreatePayrollRequestGrossOverridesItem> $grossOverrides
     */
    #[JsonProperty('grossOverrides'), ArrayType([RunsCreatePayrollRequestGrossOverridesItem::class])]
    public ?array $grossOverrides;

    /**
     * @var ?array<RunsCreatePayrollRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([RunsCreatePayrollRequestLinesItem::class])]
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
     *   includeNatura?: ?bool,
     *   grossOverrides?: ?array<RunsCreatePayrollRequestGrossOverridesItem>,
     *   lines?: ?array<RunsCreatePayrollRequestLinesItem>,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->includeNatura = $values['includeNatura'] ?? null;
        $this->grossOverrides = $values['grossOverrides'] ?? null;
        $this->lines = $values['lines'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
