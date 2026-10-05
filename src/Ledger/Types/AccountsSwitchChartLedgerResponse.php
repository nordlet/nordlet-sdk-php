<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AccountsSwitchChartLedgerResponse extends JsonSerializableType
{
    /**
     * @var string $chartTemplate
     */
    #[JsonProperty('chartTemplate')]
    public string $chartTemplate;

    /**
     * @var int $accounts
     */
    #[JsonProperty('accounts')]
    public int $accounts;

    /**
     * @param array{
     *   chartTemplate: string,
     *   accounts: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->chartTemplate = $values['chartTemplate'];
        $this->accounts = $values['accounts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
