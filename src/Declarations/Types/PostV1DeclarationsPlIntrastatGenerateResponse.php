<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsPlIntrastatGenerateResponse extends JsonSerializableType
{
    /**
     * @var value-of<PostV1DeclarationsPlIntrastatGenerateResponseFlow> $flow
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
     * @var array<PostV1DeclarationsPlIntrastatGenerateResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsPlIntrastatGenerateResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PostV1DeclarationsPlIntrastatGenerateResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PostV1DeclarationsPlIntrastatGenerateResponseTotals $totals;

    /**
     * @var PostV1DeclarationsPlIntrastatGenerateResponseCounts $counts
     */
    #[JsonProperty('counts')]
    public PostV1DeclarationsPlIntrastatGenerateResponseCounts $counts;

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
     *   flow: value-of<PostV1DeclarationsPlIntrastatGenerateResponseFlow>,
     *   referencePeriod: string,
     *   periodStart: string,
     *   periodEnd: string,
     *   nip: string,
     *   companyName: string,
     *   detailedThreshold: bool,
     *   rows: array<PostV1DeclarationsPlIntrastatGenerateResponseRowsItem>,
     *   totals: PostV1DeclarationsPlIntrastatGenerateResponseTotals,
     *   counts: PostV1DeclarationsPlIntrastatGenerateResponseCounts,
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
