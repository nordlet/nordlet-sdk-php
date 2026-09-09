<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountReferralGetResponseHistoryItem extends JsonSerializableType
{
    /**
     * @var int $points
     */
    #[JsonProperty('points')]
    public int $points;

    /**
     * @var string $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   points: int,
     *   reason: string,
     *   createdAt: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->points = $values['points'];
        $this->reason = $values['reason'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
