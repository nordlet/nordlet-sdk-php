<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LtFr0600ComputeDeclarationsRequest extends JsonSerializableType
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
     * @var ?int $months
     */
    #[JsonProperty('months')]
    public ?int $months;

    /**
     * @var ?int $deductionPercent
     */
    #[JsonProperty('deductionPercent')]
    public ?int $deductionPercent;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   months?: ?int,
     *   deductionPercent?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->months = $values['months'] ?? null;
        $this->deductionPercent = $values['deductionPercent'] ?? null;
    }
}
