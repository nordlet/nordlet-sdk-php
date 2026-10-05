<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\LtGpm312ComputeDeclarationsRequestPayoutTiming;

class LtGpm312ComputeDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var ?value-of<LtGpm312ComputeDeclarationsRequestPayoutTiming> $payoutTiming
     */
    #[JsonProperty('payoutTiming')]
    public ?string $payoutTiming;

    /**
     * @param array{
     *   year: int,
     *   payoutTiming?: ?value-of<LtGpm312ComputeDeclarationsRequestPayoutTiming>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->payoutTiming = $values['payoutTiming'] ?? null;
    }
}
