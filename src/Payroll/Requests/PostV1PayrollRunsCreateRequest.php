<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Payroll\Types\PostV1PayrollRunsCreateRequestGrossOverridesItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Payroll\Types\PostV1PayrollRunsCreateRequestLinesItem;

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
     * @var ?bool $includeNatura
     */
    #[JsonProperty('includeNatura')]
    public ?bool $includeNatura;

    /**
     * @var ?array<PostV1PayrollRunsCreateRequestGrossOverridesItem> $grossOverrides
     */
    #[JsonProperty('grossOverrides'), ArrayType([PostV1PayrollRunsCreateRequestGrossOverridesItem::class])]
    public ?array $grossOverrides;

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
     *   includeNatura?: ?bool,
     *   grossOverrides?: ?array<PostV1PayrollRunsCreateRequestGrossOverridesItem>,
     *   lines?: ?array<PostV1PayrollRunsCreateRequestLinesItem>,
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
