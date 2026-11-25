<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class IeRtdGenerateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

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
     * @var string $taxRegNumber
     */
    #[JsonProperty('taxRegNumber')]
    public string $taxRegNumber;

    /**
     * @var array<IeRtdGenerateDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([IeRtdGenerateDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var IeRtdGenerateDeclarationsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public IeRtdGenerateDeclarationsResponseTotals $totals;

    /**
     * @var IeRtdGenerateDeclarationsResponseCounts $counts
     */
    #[JsonProperty('counts')]
    public IeRtdGenerateDeclarationsResponseCounts $counts;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

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
     *   periodStart: string,
     *   periodEnd: string,
     *   taxRegNumber: string,
     *   rows: array<IeRtdGenerateDeclarationsResponseRowsItem>,
     *   totals: IeRtdGenerateDeclarationsResponseTotals,
     *   counts: IeRtdGenerateDeclarationsResponseCounts,
     *   fileName: string,
     *   xml: string,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->taxRegNumber = $values['taxRegNumber'];
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
        $this->counts = $values['counts'];
        $this->fileName = $values['fileName'];
        $this->xml = $values['xml'];
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
