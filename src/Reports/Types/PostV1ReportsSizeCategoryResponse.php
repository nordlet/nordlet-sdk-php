<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsSizeCategoryResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var PostV1ReportsSizeCategoryResponseCriteria $criteria
     */
    #[JsonProperty('criteria')]
    public PostV1ReportsSizeCategoryResponseCriteria $criteria;

    /**
     * @var value-of<PostV1ReportsSizeCategoryResponseCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var array<string, PostV1ReportsSizeCategoryResponseThresholdsValue> $thresholds
     */
    #[JsonProperty('thresholds'), ArrayType(['string' => PostV1ReportsSizeCategoryResponseThresholdsValue::class])]
    public array $thresholds;

    /**
     * @param array{
     *   year: int,
     *   criteria: PostV1ReportsSizeCategoryResponseCriteria,
     *   category: value-of<PostV1ReportsSizeCategoryResponseCategory>,
     *   thresholds: array<string, PostV1ReportsSizeCategoryResponseThresholdsValue>,
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
