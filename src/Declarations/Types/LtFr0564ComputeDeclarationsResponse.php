<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtFr0564ComputeDeclarationsResponse extends JsonSerializableType
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
     * @var string $periodStart
     */
    #[JsonProperty('periodStart')]
    public string $periodStart;

    /**
     * @var string $periodEnd
     */
    #[JsonProperty('periodEnd')]
    public string $periodEnd;

    /**
     * @var string $registrationNumber
     */
    #[JsonProperty('registrationNumber')]
    public string $registrationNumber;

    /**
     * @var string $vatCode
     */
    #[JsonProperty('vatCode')]
    public string $vatCode;

    /**
     * @var string $companyName
     */
    #[JsonProperty('companyName')]
    public string $companyName;

    /**
     * @var array<LtFr0564ComputeDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([LtFr0564ComputeDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var LtFr0564ComputeDeclarationsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public LtFr0564ComputeDeclarationsResponseTotals $totals;

    /**
     * @var LtFr0564ComputeDeclarationsResponseCounts $counts
     */
    #[JsonProperty('counts')]
    public LtFr0564ComputeDeclarationsResponseCounts $counts;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public array $notes;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   periodStart: string,
     *   periodEnd: string,
     *   registrationNumber: string,
     *   vatCode: string,
     *   companyName: string,
     *   rows: array<LtFr0564ComputeDeclarationsResponseRowsItem>,
     *   totals: LtFr0564ComputeDeclarationsResponseTotals,
     *   counts: LtFr0564ComputeDeclarationsResponseCounts,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->registrationNumber = $values['registrationNumber'];
        $this->vatCode = $values['vatCode'];
        $this->companyName = $values['companyName'];
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
        $this->counts = $values['counts'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
