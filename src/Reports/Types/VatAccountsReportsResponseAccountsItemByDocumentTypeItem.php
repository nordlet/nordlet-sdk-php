<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VatAccountsReportsResponseAccountsItemByDocumentTypeItem extends JsonSerializableType
{
    /**
     * @var string $documentType
     */
    #[JsonProperty('documentType')]
    public string $documentType;

    /**
     * @var string $debit
     */
    #[JsonProperty('debit')]
    public string $debit;

    /**
     * @var string $credit
     */
    #[JsonProperty('credit')]
    public string $credit;

    /**
     * @var int $transactions
     */
    #[JsonProperty('transactions')]
    public int $transactions;

    /**
     * @param array{
     *   documentType: string,
     *   debit: string,
     *   credit: string,
     *   transactions: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentType = $values['documentType'];
        $this->debit = $values['debit'];
        $this->credit = $values['credit'];
        $this->transactions = $values['transactions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
