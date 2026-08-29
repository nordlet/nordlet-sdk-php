<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationReportResponseCashFlow extends JsonSerializableType
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
     * @var PostV1ConsolidationReportResponseCashFlowOperating $operating
     */
    #[JsonProperty('operating')]
    public PostV1ConsolidationReportResponseCashFlowOperating $operating;

    /**
     * @var PostV1ConsolidationReportResponseCashFlowInvesting $investing
     */
    #[JsonProperty('investing')]
    public PostV1ConsolidationReportResponseCashFlowInvesting $investing;

    /**
     * @var PostV1ConsolidationReportResponseCashFlowFinancing $financing
     */
    #[JsonProperty('financing')]
    public PostV1ConsolidationReportResponseCashFlowFinancing $financing;

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
     *   operating: PostV1ConsolidationReportResponseCashFlowOperating,
     *   investing: PostV1ConsolidationReportResponseCashFlowInvesting,
     *   financing: PostV1ConsolidationReportResponseCashFlowFinancing,
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
