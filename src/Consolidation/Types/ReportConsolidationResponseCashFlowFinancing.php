<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ReportConsolidationResponseCashFlowFinancing extends JsonSerializableType
{
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
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @var array<ReportConsolidationResponseCashFlowFinancingRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([ReportConsolidationResponseCashFlowFinancingRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   inflow: string,
     *   outflow: string,
     *   net: string,
     *   rows: array<ReportConsolidationResponseCashFlowFinancingRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->inflow = $values['inflow'];
        $this->outflow = $values['outflow'];
        $this->net = $values['net'];
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
