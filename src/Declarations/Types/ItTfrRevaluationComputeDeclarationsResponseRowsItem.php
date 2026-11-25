<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItTfrRevaluationComputeDeclarationsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $fund
     */
    #[JsonProperty('fund')]
    public string $fund;

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
     * @var string $fundAfter
     */
    #[JsonProperty('fundAfter')]
    public string $fundAfter;

    /**
     * @param array{
     *   employeeId: string,
     *   name: string,
     *   fund: string,
     *   revaluation: string,
     *   substituteTax: string,
     *   fundAfter: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->name = $values['name'];
        $this->fund = $values['fund'];
        $this->revaluation = $values['revaluation'];
        $this->substituteTax = $values['substituteTax'];
        $this->fundAfter = $values['fundAfter'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
