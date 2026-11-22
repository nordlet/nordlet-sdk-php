<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class Us1099NecListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var float $year
     */
    #[JsonProperty('year')]
    public float $year;

    /**
     * @var string $threshold
     */
    #[JsonProperty('threshold')]
    public string $threshold;

    /**
     * @var array<Us1099NecListDeclarationsResponseFormsItem> $forms
     */
    #[JsonProperty('forms'), ArrayType([Us1099NecListDeclarationsResponseFormsItem::class])]
    public array $forms;

    /**
     * @var array<Us1099NecListDeclarationsResponseExcludedItem> $excluded
     */
    #[JsonProperty('excluded'), ArrayType([Us1099NecListDeclarationsResponseExcludedItem::class])]
    public array $excluded;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   year: float,
     *   threshold: string,
     *   forms: array<Us1099NecListDeclarationsResponseFormsItem>,
     *   excluded: array<Us1099NecListDeclarationsResponseExcludedItem>,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->threshold = $values['threshold'];
        $this->forms = $values['forms'];
        $this->excluded = $values['excluded'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
