<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsLtGpm313ComputeRequestPayoutTiming;

class PostV1DeclarationsLtGpm313ComputeRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var ?value-of<PostV1DeclarationsLtGpm313ComputeRequestPayoutTiming> $payoutTiming
     */
    #[JsonProperty('payoutTiming')]
    public ?string $payoutTiming;

    /**
     * @var ?int $paymentDay
     */
    #[JsonProperty('paymentDay')]
    public ?int $paymentDay;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   payoutTiming?: ?value-of<PostV1DeclarationsLtGpm313ComputeRequestPayoutTiming>,
     *   paymentDay?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->payoutTiming = $values['payoutTiming'] ?? null;
        $this->paymentDay = $values['paymentDay'] ?? null;
    }
}
