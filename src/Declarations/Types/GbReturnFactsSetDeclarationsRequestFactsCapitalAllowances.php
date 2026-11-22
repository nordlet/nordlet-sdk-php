<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbReturnFactsSetDeclarationsRequestFactsCapitalAllowances extends JsonSerializableType
{
    /**
     * @var ?string $fullExpensing
     */
    #[JsonProperty('fullExpensing')]
    public ?string $fullExpensing;

    /**
     * @var ?string $annualInvestmentAllowance
     */
    #[JsonProperty('annualInvestmentAllowance')]
    public ?string $annualInvestmentAllowance;

    /**
     * @var ?string $specialRatePool
     */
    #[JsonProperty('specialRatePool')]
    public ?string $specialRatePool;

    /**
     * @var ?string $mainPool
     */
    #[JsonProperty('mainPool')]
    public ?string $mainPool;

    /**
     * @var ?string $structuresAndBuildings
     */
    #[JsonProperty('structuresAndBuildings')]
    public ?string $structuresAndBuildings;

    /**
     * @var ?string $other
     */
    #[JsonProperty('other')]
    public ?string $other;

    /**
     * @param array{
     *   fullExpensing?: ?string,
     *   annualInvestmentAllowance?: ?string,
     *   specialRatePool?: ?string,
     *   mainPool?: ?string,
     *   structuresAndBuildings?: ?string,
     *   other?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fullExpensing = $values['fullExpensing'] ?? null;
        $this->annualInvestmentAllowance = $values['annualInvestmentAllowance'] ?? null;
        $this->specialRatePool = $values['specialRatePool'] ?? null;
        $this->mainPool = $values['mainPool'] ?? null;
        $this->structuresAndBuildings = $values['structuresAndBuildings'] ?? null;
        $this->other = $values['other'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
