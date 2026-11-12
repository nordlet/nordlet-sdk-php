<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PeriodChecklistReportsRequest extends JsonSerializableType
{
    /**
     * @var string $period
     */
    #[JsonProperty('period')]
    public string $period;

    /**
     * @param array{
     *   period: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->period = $values['period'];
    }
}
