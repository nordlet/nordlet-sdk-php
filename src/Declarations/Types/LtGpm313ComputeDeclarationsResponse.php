<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtGpm313ComputeDeclarationsResponse extends JsonSerializableType
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
     * @var ?LtGpm313ComputeDeclarationsResponseRunPeriod $runPeriod
     */
    #[JsonProperty('runPeriod')]
    public ?LtGpm313ComputeDeclarationsResponseRunPeriod $runPeriod;

    /**
     * @var array<LtGpm313ComputeDeclarationsResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([LtGpm313ComputeDeclarationsResponseFieldsItem::class])]
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
     *   fields: array<LtGpm313ComputeDeclarationsResponseFieldsItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   runPeriod?: ?LtGpm313ComputeDeclarationsResponseRunPeriod,
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
