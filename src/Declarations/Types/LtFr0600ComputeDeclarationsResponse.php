<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtFr0600ComputeDeclarationsResponse extends JsonSerializableType
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
     * @var int $deductionPercent
     */
    #[JsonProperty('deductionPercent')]
    public int $deductionPercent;

    /**
     * @var array<LtFr0600ComputeDeclarationsResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([LtFr0600ComputeDeclarationsResponseFieldsItem::class])]
    public array $fields;

    /**
     * @var array<LtFr0600ComputeDeclarationsResponseBreakdownItem> $breakdown
     */
    #[JsonProperty('breakdown'), ArrayType([LtFr0600ComputeDeclarationsResponseBreakdownItem::class])]
    public array $breakdown;

    /**
     * @var LtFr0600ComputeDeclarationsResponseCounts $counts
     */
    #[JsonProperty('counts')]
    public LtFr0600ComputeDeclarationsResponseCounts $counts;

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
     * @param array{
     *   periodStart: string,
     *   periodEnd: string,
     *   deductionPercent: int,
     *   fields: array<LtFr0600ComputeDeclarationsResponseFieldsItem>,
     *   breakdown: array<LtFr0600ComputeDeclarationsResponseBreakdownItem>,
     *   counts: LtFr0600ComputeDeclarationsResponseCounts,
     *   warnings: array<string>,
     *   notes: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->deductionPercent = $values['deductionPercent'];
        $this->fields = $values['fields'];
        $this->breakdown = $values['breakdown'];
        $this->counts = $values['counts'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
