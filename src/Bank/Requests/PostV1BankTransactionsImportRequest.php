<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankTransactionsImportRequestTransactionsItem;
use Nordlet\Core\Types\ArrayType;

class PostV1BankTransactionsImportRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var array<PostV1BankTransactionsImportRequestTransactionsItem> $transactions
     */
    #[JsonProperty('transactions'), ArrayType([PostV1BankTransactionsImportRequestTransactionsItem::class])]
    public array $transactions;

    /**
     * @param array{
     *   bankAccountId: string,
     *   transactions: array<PostV1BankTransactionsImportRequestTransactionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->transactions = $values['transactions'];
    }
}
