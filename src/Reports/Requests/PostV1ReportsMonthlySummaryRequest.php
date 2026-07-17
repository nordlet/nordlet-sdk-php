<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsMonthlySummaryRequest extends JsonSerializableType
{
    /**
     * @var ?int $months
     */
    #[JsonProperty('months')]
    public ?int $months;

    /**
     * @param array{
     *   months?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->months = $values['months'] ?? null;
    }
}
