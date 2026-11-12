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
     * @var ?string $openingBalance
     */
    #[JsonProperty('openingBalance')]
    public ?string $openingBalance;

    /**
     * @var ?string $closingBalance
     */
    #[JsonProperty('closingBalance')]
    public ?string $closingBalance;

    /**
     * @param array{
     *   bankAccountId: string,
     *   transactions: array<TransactionsImportBankRequestTransactionsItem>,
     *   openingBalance?: ?string,
     *   closingBalance?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->transactions = $values['transactions'];
        $this->openingBalance = $values['openingBalance'] ?? null;
        $this->closingBalance = $values['closingBalance'] ?? null;
    }
}
