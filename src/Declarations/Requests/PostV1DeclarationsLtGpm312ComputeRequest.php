<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsLtGpm312ComputeRequestPayoutTiming;

class PostV1DeclarationsLtGpm312ComputeRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var ?value-of<PostV1DeclarationsLtGpm312ComputeRequestPayoutTiming> $payoutTiming
     */
    #[JsonProperty('payoutTiming')]
    public ?string $payoutTiming;

    /**
     * @param array{
     *   year: int,
     *   payoutTiming?: ?value-of<PostV1DeclarationsLtGpm312ComputeRequestPayoutTiming>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->payoutTiming = $values['payoutTiming'] ?? null;
    }
}
