<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtIntrastatComputeDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var value-of<LtIntrastatComputeDeclarationsResponseFlow> $flow
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
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var ?string $fileId
     */
    #[JsonProperty('fileId')]
    public ?string $fileId;

    /**
     * @var array<LtIntrastatComputeDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([LtIntrastatComputeDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var LtIntrastatComputeDeclarationsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public LtIntrastatComputeDeclarationsResponseTotals $totals;

    /**
     * @var LtIntrastatComputeDeclarationsResponseCounts $counts
     */
    #[JsonProperty('counts')]
    public LtIntrastatComputeDeclarationsResponseCounts $counts;

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
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @param array{
     *   flow: value-of<LtIntrastatComputeDeclarationsResponseFlow>,
     *   referencePeriod: string,
     *   periodStart: string,
     *   periodEnd: string,
     *   fileName: string,
     *   rows: array<LtIntrastatComputeDeclarationsResponseRowsItem>,
     *   totals: LtIntrastatComputeDeclarationsResponseTotals,
     *   counts: LtIntrastatComputeDeclarationsResponseCounts,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   xml: string,
     *   fileId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->flow = $values['flow'];
        $this->referencePeriod = $values['referencePeriod'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->fileName = $values['fileName'];
        $this->fileId = $values['fileId'] ?? null;
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
        $this->counts = $values['counts'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
        $this->xml = $values['xml'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
