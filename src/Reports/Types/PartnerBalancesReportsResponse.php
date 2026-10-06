<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PartnerBalancesReportsResponse extends JsonSerializableType
{
    /**
     * @var array<PartnerBalancesReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PartnerBalancesReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var PartnerBalancesReportsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public PartnerBalancesReportsResponseTotals $totals;

    /**
     * @param array{
     *   rows: array<PartnerBalancesReportsResponseRowsItem>,
     *   totals: PartnerBalancesReportsResponseTotals,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
