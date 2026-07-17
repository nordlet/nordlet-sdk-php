<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtFr0600ComputeResponse extends JsonSerializableType
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
     * @var array<PostV1DeclarationsLtFr0600ComputeResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([PostV1DeclarationsLtFr0600ComputeResponseFieldsItem::class])]
    public array $fields;

    /**
     * @var array<PostV1DeclarationsLtFr0600ComputeResponseBreakdownItem> $breakdown
     */
    #[JsonProperty('breakdown'), ArrayType([PostV1DeclarationsLtFr0600ComputeResponseBreakdownItem::class])]
    public array $breakdown;

    /**
     * @var PostV1DeclarationsLtFr0600ComputeResponseCounts $counts
     */
    #[JsonProperty('counts')]
    public PostV1DeclarationsLtFr0600ComputeResponseCounts $counts;

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
     *   fields: array<PostV1DeclarationsLtFr0600ComputeResponseFieldsItem>,
     *   breakdown: array<PostV1DeclarationsLtFr0600ComputeResponseBreakdownItem>,
     *   counts: PostV1DeclarationsLtFr0600ComputeResponseCounts,
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
