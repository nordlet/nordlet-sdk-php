<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TransactionsUnignoreBankRequest extends JsonSerializableType
{
    /**
     * @var string $transactionId
     */
    #[JsonProperty('transactionId')]
    public string $transactionId;

    /**
     * @param array{
     *   transactionId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->transactionId = $values['transactionId'];
    }
}
