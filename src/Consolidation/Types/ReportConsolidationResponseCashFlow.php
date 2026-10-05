<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ReportConsolidationResponseCashFlow extends JsonSerializableType
{
    /**
     * @var string $openingCash
     */
    #[JsonProperty('openingCash')]
    public string $openingCash;

    /**
     * @var string $closingCash
     */
    #[JsonProperty('closingCash')]
    public string $closingCash;

    /**
     * @var string $netChange
     */
    #[JsonProperty('netChange')]
    public string $netChange;

    /**
     * @var ReportConsolidationResponseCashFlowOperating $operating
     */
    #[JsonProperty('operating')]
    public ReportConsolidationResponseCashFlowOperating $operating;

    /**
     * @var ReportConsolidationResponseCashFlowInvesting $investing
     */
    #[JsonProperty('investing')]
    public ReportConsolidationResponseCashFlowInvesting $investing;

    /**
     * @var ReportConsolidationResponseCashFlowFinancing $financing
     */
    #[JsonProperty('financing')]
    public ReportConsolidationResponseCashFlowFinancing $financing;

    /**
     * @var bool $balanced
     */
    #[JsonProperty('balanced')]
    public bool $balanced;

    /**
     * @param array{
     *   openingCash: string,
     *   closingCash: string,
     *   netChange: string,
     *   operating: ReportConsolidationResponseCashFlowOperating,
     *   investing: ReportConsolidationResponseCashFlowInvesting,
     *   financing: ReportConsolidationResponseCashFlowFinancing,
     *   balanced: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->openingCash = $values['openingCash'];
        $this->closingCash = $values['closingCash'];
        $this->netChange = $values['netChange'];
        $this->operating = $values['operating'];
        $this->investing = $values['investing'];
        $this->financing = $values['financing'];
        $this->balanced = $values['balanced'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
