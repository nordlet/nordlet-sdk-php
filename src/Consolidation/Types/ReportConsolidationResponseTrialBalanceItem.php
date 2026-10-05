<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReportConsolidationResponseTrialBalanceItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $closing
     */
    #[JsonProperty('closing')]
    public string $closing;

    /**
     * @var string $period
     */
    #[JsonProperty('period')]
    public string $period;

    /**
     * @param array{
     *   code: string,
     *   type: string,
     *   closing: string,
     *   period: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->type = $values['type'];
        $this->closing = $values['closing'];
        $this->period = $values['period'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
