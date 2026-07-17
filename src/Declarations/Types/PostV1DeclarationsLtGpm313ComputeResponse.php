<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtGpm313ComputeResponse extends JsonSerializableType
{
    /**
     * @var int $declarationYear
     */
    #[JsonProperty('declarationYear')]
    public int $declarationYear;

    /**
     * @var int $declarationMonth
     */
    #[JsonProperty('declarationMonth')]
    public int $declarationMonth;

    /**
     * @var ?PostV1DeclarationsLtGpm313ComputeResponseRunPeriod $runPeriod
     */
    #[JsonProperty('runPeriod')]
    public ?PostV1DeclarationsLtGpm313ComputeResponseRunPeriod $runPeriod;

    /**
     * @var array<PostV1DeclarationsLtGpm313ComputeResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([PostV1DeclarationsLtGpm313ComputeResponseFieldsItem::class])]
    public array $fields;

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
     *   declarationYear: int,
     *   declarationMonth: int,
     *   fields: array<PostV1DeclarationsLtGpm313ComputeResponseFieldsItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   runPeriod?: ?PostV1DeclarationsLtGpm313ComputeResponseRunPeriod,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->declarationYear = $values['declarationYear'];
        $this->declarationMonth = $values['declarationMonth'];
        $this->runPeriod = $values['runPeriod'] ?? null;
        $this->fields = $values['fields'];
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
