<?php

namespace Nordlet\Cash\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class BalanceCashResponse extends JsonSerializableType
{
    /**
     * @var string $cashAccountCode
     */
    #[JsonProperty('cashAccountCode')]
    public string $cashAccountCode;

    /**
     * @var string $balance
     */
    #[JsonProperty('balance')]
    public string $balance;

    /**
     * @param array{
     *   cashAccountCode: string,
     *   balance: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cashAccountCode = $values['cashAccountCode'];
        $this->balance = $values['balance'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
