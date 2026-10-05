<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EuUnionTurnoverGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $capEur
     */
    #[JsonProperty('capEur')]
    public string $capEur;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var bool $isVatPayer
     */
    #[JsonProperty('isVatPayer')]
    public bool $isVatPayer;

    /**
     * @var EuUnionTurnoverGetDeclarationsResponseCurrentYear $currentYear
     */
    #[JsonProperty('currentYear')]
    public EuUnionTurnoverGetDeclarationsResponseCurrentYear $currentYear;

    /**
     * @var EuUnionTurnoverGetDeclarationsResponsePreviousYear $previousYear
     */
    #[JsonProperty('previousYear')]
    public EuUnionTurnoverGetDeclarationsResponsePreviousYear $previousYear;

    /**
     * @var value-of<EuUnionTurnoverGetDeclarationsResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $headroomAmount
     */
    #[JsonProperty('headroomAmount')]
    public ?string $headroomAmount;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   capEur: string,
     *   currency: string,
     *   isVatPayer: bool,
     *   currentYear: EuUnionTurnoverGetDeclarationsResponseCurrentYear,
     *   previousYear: EuUnionTurnoverGetDeclarationsResponsePreviousYear,
     *   status: value-of<EuUnionTurnoverGetDeclarationsResponseStatus>,
     *   warnings: array<string>,
     *   headroomAmount?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->capEur = $values['capEur'];
        $this->currency = $values['currency'];
        $this->isVatPayer = $values['isVatPayer'];
        $this->currentYear = $values['currentYear'];
        $this->previousYear = $values['previousYear'];
        $this->status = $values['status'];
        $this->headroomAmount = $values['headroomAmount'] ?? null;
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
