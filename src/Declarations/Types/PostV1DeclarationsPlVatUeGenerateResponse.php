<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsPlVatUeGenerateResponse extends JsonSerializableType
{
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
     * @var array<PostV1DeclarationsPlVatUeGenerateResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsPlVatUeGenerateResponseRowsItem::class])]
    public array $rows;

    /**
     * @var array<PostV1DeclarationsPlVatUeGenerateResponseTotalsItem> $totals
     */
    #[JsonProperty('totals'), ArrayType([PostV1DeclarationsPlVatUeGenerateResponseTotalsItem::class])]
    public array $totals;

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
     *   periodStart: string,
     *   periodEnd: string,
     *   nip: string,
     *   companyName: string,
     *   rows: array<PostV1DeclarationsPlVatUeGenerateResponseRowsItem>,
     *   totals: array<PostV1DeclarationsPlVatUeGenerateResponseTotalsItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->nip = $values['nip'];
        $this->companyName = $values['companyName'];
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
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
