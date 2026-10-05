<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EuDistanceSalesThresholdGetDeclarationsResponse extends JsonSerializableType
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
     * @var EuDistanceSalesThresholdGetDeclarationsResponseCurrentYear $currentYear
     */
    #[JsonProperty('currentYear')]
    public EuDistanceSalesThresholdGetDeclarationsResponseCurrentYear $currentYear;

    /**
     * @var EuDistanceSalesThresholdGetDeclarationsResponsePrecedingYear $precedingYear
     */
    #[JsonProperty('precedingYear')]
    public EuDistanceSalesThresholdGetDeclarationsResponsePrecedingYear $precedingYear;

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
     *   currentYear: EuDistanceSalesThresholdGetDeclarationsResponseCurrentYear,
     *   precedingYear: EuDistanceSalesThresholdGetDeclarationsResponsePrecedingYear,
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
