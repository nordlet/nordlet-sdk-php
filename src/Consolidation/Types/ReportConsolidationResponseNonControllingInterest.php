<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReportConsolidationResponseNonControllingInterest extends JsonSerializableType
{
    /**
     * @var string $equity
     */
    #[JsonProperty('equity')]
    public string $equity;

    /**
     * @var string $result
     */
    #[JsonProperty('result')]
    public string $result;

    /**
     * @param array{
     *   equity: string,
     *   result: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->equity = $values['equity'];
        $this->result = $values['result'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
