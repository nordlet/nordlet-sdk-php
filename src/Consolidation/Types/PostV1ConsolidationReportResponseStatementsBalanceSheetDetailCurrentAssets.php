<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationReportResponseStatementsBalanceSheetDetailCurrentAssets extends JsonSerializableType
{
    /**
     * @var string $inventories
     */
    #[JsonProperty('inventories')]
    public string $inventories;

    /**
     * @var string $receivables
     */
    #[JsonProperty('receivables')]
    public string $receivables;

    /**
     * @var string $otherCurrent
     */
    #[JsonProperty('otherCurrent')]
    public string $otherCurrent;

    /**
     * @var string $cash
     */
    #[JsonProperty('cash')]
    public string $cash;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   inventories: string,
     *   receivables: string,
     *   otherCurrent: string,
     *   cash: string,
     *   total: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->inventories = $values['inventories'];
        $this->receivables = $values['receivables'];
        $this->otherCurrent = $values['otherCurrent'];
        $this->cash = $values['cash'];
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
