<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItTfrRevaluationComputeDeclarationsResponseTotals extends JsonSerializableType
{
    /**
     * @var string $revaluation
     */
    #[JsonProperty('revaluation')]
    public string $revaluation;

    /**
     * @var string $substituteTax
     */
    #[JsonProperty('substituteTax')]
    public string $substituteTax;

    /**
     * @var string $accontoNextYear
     */
    #[JsonProperty('accontoNextYear')]
    public string $accontoNextYear;

    /**
     * @param array{
     *   revaluation: string,
     *   substituteTax: string,
     *   accontoNextYear: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->revaluation = $values['revaluation'];
        $this->substituteTax = $values['substituteTax'];
        $this->accontoNextYear = $values['accontoNextYear'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
