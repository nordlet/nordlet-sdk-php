<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerJournalTransactionsCreateRequestEntriesItem extends JsonSerializableType
{
    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var ?string $costCenterId
     */
    #[JsonProperty('costCenterId')]
    public ?string $costCenterId;

    /**
     * @var ?string $debit
     */
    #[JsonProperty('debit')]
    public ?string $debit;

    /**
     * @var ?string $credit
     */
    #[JsonProperty('credit')]
    public ?string $credit;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   accountCode: string,
     *   costCenterId?: ?string,
     *   debit?: ?string,
     *   credit?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accountCode = $values['accountCode'];
        $this->costCenterId = $values['costCenterId'] ?? null;
        $this->debit = $values['debit'] ?? null;
        $this->credit = $values['credit'] ?? null;
        $this->description = $values['description'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
