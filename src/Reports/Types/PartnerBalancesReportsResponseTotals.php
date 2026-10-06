<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PartnerBalancesReportsResponseTotals extends JsonSerializableType
{
    /**
     * @var string $receivable
     */
    #[JsonProperty('receivable')]
    public string $receivable;

    /**
     * @var string $payable
     */
    #[JsonProperty('payable')]
    public string $payable;

    /**
     * @param array{
     *   receivable: string,
     *   payable: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->receivable = $values['receivable'];
        $this->payable = $values['payable'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
