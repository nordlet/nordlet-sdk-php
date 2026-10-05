<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class FinancialStatementsReportsResponseBalanceSheetDetailLiabilities extends JsonSerializableType
{
    /**
     * @var string $nonCurrent
     */
    #[JsonProperty('nonCurrent')]
    public string $nonCurrent;

    /**
     * @var string $current
     */
    #[JsonProperty('current')]
    public string $current;

    /**
     * @var string $other
     */
    #[JsonProperty('other')]
    public string $other;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   nonCurrent: string,
     *   current: string,
     *   other: string,
     *   total: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->nonCurrent = $values['nonCurrent'];
        $this->current = $values['current'];
        $this->other = $values['other'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
