<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class CashFlowReportsResponse extends JsonSerializableType
{
    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

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
     * @var CashFlowReportsResponseOperating $operating
     */
    #[JsonProperty('operating')]
    public CashFlowReportsResponseOperating $operating;

    /**
     * @var CashFlowReportsResponseInvesting $investing
     */
    #[JsonProperty('investing')]
    public CashFlowReportsResponseInvesting $investing;

    /**
     * @var CashFlowReportsResponseFinancing $financing
     */
    #[JsonProperty('financing')]
    public CashFlowReportsResponseFinancing $financing;

    /**
     * @var bool $balanced
     */
    #[JsonProperty('balanced')]
    public bool $balanced;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   openingCash: string,
     *   closingCash: string,
     *   netChange: string,
     *   operating: CashFlowReportsResponseOperating,
     *   investing: CashFlowReportsResponseInvesting,
     *   financing: CashFlowReportsResponseFinancing,
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
