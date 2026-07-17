<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ConsolidationReportResponseEliminations extends JsonSerializableType
{
    /**
     * @var array<PostV1ConsolidationReportResponseEliminationsAppliedItem> $applied
     */
    #[JsonProperty('applied'), ArrayType([PostV1ConsolidationReportResponseEliminationsAppliedItem::class])]
    public array $applied;

    /**
     * @var bool $balanced
     */
    #[JsonProperty('balanced')]
    public bool $balanced;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @param array{
     *   applied: array<PostV1ConsolidationReportResponseEliminationsAppliedItem>,
     *   balanced: bool,
     *   net: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->applied = $values['applied'];
        $this->balanced = $values['balanced'];
        $this->net = $values['net'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
