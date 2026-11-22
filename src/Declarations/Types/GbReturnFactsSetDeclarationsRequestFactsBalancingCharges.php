<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbReturnFactsSetDeclarationsRequestFactsBalancingCharges extends JsonSerializableType
{
    /**
     * @var ?string $fullExpensing
     */
    #[JsonProperty('fullExpensing')]
    public ?string $fullExpensing;

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
     * @var ?string $other
     */
    #[JsonProperty('other')]
    public ?string $other;

    /**
     * @param array{
     *   fullExpensing?: ?string,
     *   specialRatePool?: ?string,
     *   mainPool?: ?string,
     *   other?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fullExpensing = $values['fullExpensing'] ?? null;
        $this->specialRatePool = $values['specialRatePool'] ?? null;
        $this->mainPool = $values['mainPool'] ?? null;
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
