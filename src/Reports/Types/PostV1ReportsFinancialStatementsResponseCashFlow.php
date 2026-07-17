<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsFinancialStatementsResponseCashFlow extends JsonSerializableType
{
    /**
     * @var string $openingCash
     */
    #[JsonProperty('openingCash')]
    public string $openingCash;

    /**
     * @var string $operating
     */
    #[JsonProperty('operating')]
    public string $operating;

    /**
     * @var string $investing
     */
    #[JsonProperty('investing')]
    public string $investing;

    /**
     * @var string $financing
     */
    #[JsonProperty('financing')]
    public string $financing;

    /**
     * @var string $netChange
     */
    #[JsonProperty('netChange')]
    public string $netChange;

    /**
     * @var string $closingCash
     */
    #[JsonProperty('closingCash')]
    public string $closingCash;

    /**
     * @param array{
     *   openingCash: string,
     *   operating: string,
     *   investing: string,
     *   financing: string,
     *   netChange: string,
     *   closingCash: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->openingCash = $values['openingCash'];
        $this->operating = $values['operating'];
        $this->investing = $values['investing'];
        $this->financing = $values['financing'];
        $this->netChange = $values['netChange'];
        $this->closingCash = $values['closingCash'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
