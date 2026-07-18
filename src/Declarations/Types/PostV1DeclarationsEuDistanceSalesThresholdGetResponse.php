<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEuDistanceSalesThresholdGetResponse extends JsonSerializableType
{
    /**
     * @var string $thresholdEur
     */
    #[JsonProperty('thresholdEur')]
    public string $thresholdEur;

    /**
     * @var string $homeCountryCode
     */
    #[JsonProperty('homeCountryCode')]
    public string $homeCountryCode;

    /**
     * @var PostV1DeclarationsEuDistanceSalesThresholdGetResponseCurrentYear $currentYear
     */
    #[JsonProperty('currentYear')]
    public PostV1DeclarationsEuDistanceSalesThresholdGetResponseCurrentYear $currentYear;

    /**
     * @var PostV1DeclarationsEuDistanceSalesThresholdGetResponsePrecedingYear $precedingYear
     */
    #[JsonProperty('precedingYear')]
    public PostV1DeclarationsEuDistanceSalesThresholdGetResponsePrecedingYear $precedingYear;

    /**
     * @var bool $belowThreshold
     */
    #[JsonProperty('belowThreshold')]
    public bool $belowThreshold;

    /**
     * @var string $headroomAmount
     */
    #[JsonProperty('headroomAmount')]
    public string $headroomAmount;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   thresholdEur: string,
     *   homeCountryCode: string,
     *   currentYear: PostV1DeclarationsEuDistanceSalesThresholdGetResponseCurrentYear,
     *   precedingYear: PostV1DeclarationsEuDistanceSalesThresholdGetResponsePrecedingYear,
     *   belowThreshold: bool,
     *   headroomAmount: string,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->thresholdEur = $values['thresholdEur'];
        $this->homeCountryCode = $values['homeCountryCode'];
        $this->currentYear = $values['currentYear'];
        $this->precedingYear = $values['precedingYear'];
        $this->belowThreshold = $values['belowThreshold'];
        $this->headroomAmount = $values['headroomAmount'];
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
