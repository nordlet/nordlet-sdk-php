<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class SubmissionsCorrectionPreviewDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var bool $needed
     */
    #[JsonProperty('needed')]
    public bool $needed;

    /**
     * @var int $changeCount
     */
    #[JsonProperty('changeCount')]
    public int $changeCount;

    /**
     * @var array<SubmissionsCorrectionPreviewDeclarationsResponseChangesItem> $changes
     */
    #[JsonProperty('changes'), ArrayType([SubmissionsCorrectionPreviewDeclarationsResponseChangesItem::class])]
    public array $changes;

    /**
     * @param array{
     *   needed: bool,
     *   changeCount: int,
     *   changes: array<SubmissionsCorrectionPreviewDeclarationsResponseChangesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->needed = $values['needed'];
        $this->changeCount = $values['changeCount'];
        $this->changes = $values['changes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
