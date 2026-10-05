<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PlVatUeGenerateDeclarationsResponse extends JsonSerializableType
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
     * @var array<PlVatUeGenerateDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PlVatUeGenerateDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var array<PlVatUeGenerateDeclarationsResponseTotalsItem> $totals
     */
    #[JsonProperty('totals'), ArrayType([PlVatUeGenerateDeclarationsResponseTotalsItem::class])]
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
     *   rows: array<PlVatUeGenerateDeclarationsResponseRowsItem>,
     *   totals: array<PlVatUeGenerateDeclarationsResponseTotalsItem>,
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
