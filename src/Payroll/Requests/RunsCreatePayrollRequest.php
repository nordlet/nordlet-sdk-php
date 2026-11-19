<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Payroll\Types\RunsCreatePayrollRequestFrequency;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Payroll\Types\RunsCreatePayrollRequestGrossOverridesItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Payroll\Types\RunsCreatePayrollRequestLinesItem;

class RunsCreatePayrollRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<RunsCreatePayrollRequestFrequency> $frequency
     */
    #[JsonProperty('frequency')]
    public ?string $frequency;

    /**
     * @var ?int $year
     */
    #[JsonProperty('year')]
    public ?int $year;

    /**
     * @var ?int $month
     */
    #[JsonProperty('month')]
    public ?int $month;

    /**
     * @var ?DateTime $periodStart
     */
    #[JsonProperty('periodStart'), Date(Date::TYPE_DATE)]
    public ?DateTime $periodStart;

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
     * @var ?DateTime $payDate
     */
    #[JsonProperty('payDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $payDate;

    /**
     * @param array{
     *   frequency?: ?value-of<RunsCreatePayrollRequestFrequency>,
     *   year?: ?int,
     *   month?: ?int,
     *   periodStart?: ?DateTime,
     *   includeNatura?: ?bool,
     *   grossOverrides?: ?array<RunsCreatePayrollRequestGrossOverridesItem>,
     *   lines?: ?array<RunsCreatePayrollRequestLinesItem>,
     *   notes?: ?string,
     *   payDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->frequency = $values['frequency'] ?? null;
        $this->year = $values['year'] ?? null;
        $this->month = $values['month'] ?? null;
        $this->periodStart = $values['periodStart'] ?? null;
        $this->includeNatura = $values['includeNatura'] ?? null;
        $this->grossOverrides = $values['grossOverrides'] ?? null;
        $this->lines = $values['lines'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->payDate = $values['payDate'] ?? null;
    }
}
