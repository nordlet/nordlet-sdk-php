<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReferralGetAccountResponseRates extends JsonSerializableType
{
    /**
     * @var int $perEur
     */
    #[JsonProperty('perEur')]
    public int $perEur;

    /**
     * @var int $pointCents
     */
    #[JsonProperty('pointCents')]
    public int $pointCents;

    /**
     * @param array{
     *   perEur: int,
     *   pointCents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->perEur = $values['perEur'];
        $this->pointCents = $values['pointCents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
