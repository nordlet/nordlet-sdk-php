<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PlIntrastatGenerateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var value-of<PlIntrastatGenerateDeclarationsResponseFlow> $flow
     */
    #[JsonProperty('flow')]
    public string $flow;

    /**
     * @var string $referencePeriod
     */
    #[JsonProperty('referencePeriod')]
    public string $referencePeriod;

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
     * @var string $nip
     */
    #[JsonProperty('nip')]
    public string $nip;

    /**
     * @var string $companyName
     */
    #[JsonProperty('companyName')]
    public string $companyName;

    /**
     * @var bool $detailedThreshold
     */
    #[JsonProperty('detailedThreshold')]
    public bool $detailedThreshold;

    /**
     * @var array<PlIntrastatGenerateDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PlIntrastatGenerateDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PlIntrastatGenerateDeclarationsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PlIntrastatGenerateDeclarationsResponseTotals $totals;

    /**
     * @var PlIntrastatGenerateDeclarationsResponseCounts $counts
     */
    #[JsonProperty('counts')]
    public PlIntrastatGenerateDeclarationsResponseCounts $counts;

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
     *   flow: value-of<PlIntrastatGenerateDeclarationsResponseFlow>,
     *   referencePeriod: string,
     *   periodStart: string,
     *   periodEnd: string,
     *   nip: string,
     *   companyName: string,
     *   detailedThreshold: bool,
     *   rows: array<PlIntrastatGenerateDeclarationsResponseRowsItem>,
     *   totals: PlIntrastatGenerateDeclarationsResponseTotals,
     *   counts: PlIntrastatGenerateDeclarationsResponseCounts,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->flow = $values['flow'];
        $this->referencePeriod = $values['referencePeriod'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->nip = $values['nip'];
        $this->companyName = $values['companyName'];
        $this->detailedThreshold = $values['detailedThreshold'];
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
