<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountReferralConvertResponse extends JsonSerializableType
{
    /**
     * @var int $points
     */
    #[JsonProperty('points')]
    public int $points;

    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @var int $pointsLeft
     */
    #[JsonProperty('pointsLeft')]
    public int $pointsLeft;

    /**
     * @var int $balanceCents
     */
    #[JsonProperty('balanceCents')]
    public int $balanceCents;

    /**
     * @param array{
     *   points: int,
     *   amountCents: int,
     *   pointsLeft: int,
     *   balanceCents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->points = $values['points'];
        $this->amountCents = $values['amountCents'];
        $this->pointsLeft = $values['pointsLeft'];
        $this->balanceCents = $values['balanceCents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
