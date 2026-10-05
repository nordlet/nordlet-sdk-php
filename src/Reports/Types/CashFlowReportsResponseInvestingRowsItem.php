<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CashFlowReportsResponseInvestingRowsItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $inflow
     */
    #[JsonProperty('inflow')]
    public string $inflow;

    /**
     * @var string $outflow
     */
    #[JsonProperty('outflow')]
    public string $outflow;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   inflow: string,
     *   outflow: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->inflow = $values['inflow'];
        $this->outflow = $values['outflow'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
