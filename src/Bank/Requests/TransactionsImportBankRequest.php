<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\TransactionsImportBankRequestTransactionsItem;
use Nordlet\Core\Types\ArrayType;

class TransactionsImportBankRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var array<TransactionsImportBankRequestTransactionsItem> $transactions
     */
    #[JsonProperty('transactions'), ArrayType([TransactionsImportBankRequestTransactionsItem::class])]
    public array $transactions;

    /**
     * @param array{
     *   bankAccountId: string,
     *   transactions: array<TransactionsImportBankRequestTransactionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->transactions = $values['transactions'];
    }
}
