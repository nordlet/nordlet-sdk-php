<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsCashFlowResponse extends JsonSerializableType
{
    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

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
     * @var PostV1ReportsCashFlowResponseOperating $operating
     */
    #[JsonProperty('operating')]
    public PostV1ReportsCashFlowResponseOperating $operating;

    /**
     * @var PostV1ReportsCashFlowResponseInvesting $investing
     */
    #[JsonProperty('investing')]
    public PostV1ReportsCashFlowResponseInvesting $investing;

    /**
     * @var PostV1ReportsCashFlowResponseFinancing $financing
     */
    #[JsonProperty('financing')]
    public PostV1ReportsCashFlowResponseFinancing $financing;

    /**
     * @var bool $balanced
     */
    #[JsonProperty('balanced')]
    public bool $balanced;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   openingCash: string,
     *   closingCash: string,
     *   netChange: string,
     *   operating: PostV1ReportsCashFlowResponseOperating,
     *   investing: PostV1ReportsCashFlowResponseInvesting,
     *   financing: PostV1ReportsCashFlowResponseFinancing,
     *   balanced: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
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
