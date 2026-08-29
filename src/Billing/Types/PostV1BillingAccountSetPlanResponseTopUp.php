<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BillingAccountSetPlanResponseTopUp extends JsonSerializableType
{
    /**
     * @var int $minCents
     */
    #[JsonProperty('minCents')]
    public int $minCents;

    /**
     * @var int $maxCents
     */
    #[JsonProperty('maxCents')]
    public int $maxCents;

    /**
     * @param array{
     *   minCents: int,
     *   maxCents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->minCents = $values['minCents'];
        $this->maxCents = $values['maxCents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
