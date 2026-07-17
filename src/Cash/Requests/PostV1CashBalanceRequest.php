<?php

namespace Nordlet\Cash\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CashBalanceRequest extends JsonSerializableType
{
    /**
     * @var ?string $cashAccountCode
     */
    #[JsonProperty('cashAccountCode')]
    public ?string $cashAccountCode;

    /**
     * @var ?string $asOf
     */
    #[JsonProperty('asOf')]
    public ?string $asOf;

    /**
     * @param array{
     *   cashAccountCode?: ?string,
     *   asOf?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->cashAccountCode = $values['cashAccountCode'] ?? null;
        $this->asOf = $values['asOf'] ?? null;
    }
}
