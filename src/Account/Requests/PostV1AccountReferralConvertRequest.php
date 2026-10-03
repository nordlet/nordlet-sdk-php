<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountReferralConvertRequest extends JsonSerializableType
{
    /**
     * @var int $points
     */
    #[JsonProperty('points')]
    public int $points;

    /**
     * @param array{
     *   points: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->points = $values['points'];
    }
}
