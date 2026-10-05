<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReportConsolidationResponseEquityMethod extends JsonSerializableType
{
    /**
     * @var string $investmentsInAssociates
     */
    #[JsonProperty('investmentsInAssociates')]
    public string $investmentsInAssociates;

    /**
     * @var string $shareOfAssociatesResult
     */
    #[JsonProperty('shareOfAssociatesResult')]
    public string $shareOfAssociatesResult;

    /**
     * @param array{
     *   investmentsInAssociates: string,
     *   shareOfAssociatesResult: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->investmentsInAssociates = $values['investmentsInAssociates'];
        $this->shareOfAssociatesResult = $values['shareOfAssociatesResult'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
