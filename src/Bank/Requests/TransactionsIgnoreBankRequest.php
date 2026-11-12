<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TransactionsIgnoreBankRequest extends JsonSerializableType
{
    /**
     * @var string $transactionId
     */
    #[JsonProperty('transactionId')]
    public string $transactionId;

    /**
     * @var string $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @param array{
     *   transactionId: string,
     *   reason: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->transactionId = $values['transactionId'];
        $this->reason = $values['reason'];
    }
}
