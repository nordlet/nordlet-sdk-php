<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsTrialBalanceResponseTotals extends JsonSerializableType
{
    /**
     * @var string $debit
     */
    #[JsonProperty('debit')]
    public string $debit;

    /**
     * @var string $credit
     */
    #[JsonProperty('credit')]
    public string $credit;

    /**
     * @param array{
     *   debit: string,
     *   credit: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->debit = $values['debit'];
        $this->credit = $values['credit'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
