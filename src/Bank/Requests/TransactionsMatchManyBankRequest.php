<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\TransactionsMatchManyBankRequestAllocationsItem;
use Nordlet\Core\Types\ArrayType;

class TransactionsMatchManyBankRequest extends JsonSerializableType
{
    /**
     * @var string $transactionId
     */
    #[JsonProperty('transactionId')]
    public string $transactionId;

    /**
     * @var array<TransactionsMatchManyBankRequestAllocationsItem> $allocations
     */
    #[JsonProperty('allocations'), ArrayType([TransactionsMatchManyBankRequestAllocationsItem::class])]
    public array $allocations;

    /**
     * @param array{
     *   transactionId: string,
     *   allocations: array<TransactionsMatchManyBankRequestAllocationsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->transactionId = $values['transactionId'];
        $this->allocations = $values['allocations'];
    }
}
