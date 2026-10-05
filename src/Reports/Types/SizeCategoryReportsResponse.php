<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class SizeCategoryReportsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var SizeCategoryReportsResponseCriteria $criteria
     */
    #[JsonProperty('criteria')]
    public SizeCategoryReportsResponseCriteria $criteria;

    /**
     * @var value-of<SizeCategoryReportsResponseCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var array<string, SizeCategoryReportsResponseThresholdsValue> $thresholds
     */
    #[JsonProperty('thresholds'), ArrayType(['string' => SizeCategoryReportsResponseThresholdsValue::class])]
    public array $thresholds;

    /**
     * @param array{
     *   year: int,
     *   criteria: SizeCategoryReportsResponseCriteria,
     *   category: value-of<SizeCategoryReportsResponseCategory>,
     *   thresholds: array<string, SizeCategoryReportsResponseThresholdsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->criteria = $values['criteria'];
        $this->category = $values['category'];
        $this->thresholds = $values['thresholds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
