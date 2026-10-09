<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TransactionsMatchManyBankRequestAllocationsItem extends JsonSerializableType
{
    /**
     * @var value-of<TransactionsMatchManyBankRequestAllocationsItemDocumentType> $documentType
     */
    #[JsonProperty('documentType')]
    public string $documentType;

    /**
     * @var string $documentId
     */
    #[JsonProperty('documentId')]
    public string $documentId;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   documentType: value-of<TransactionsMatchManyBankRequestAllocationsItemDocumentType>,
     *   documentId: string,
     *   amount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentType = $values['documentType'];
        $this->documentId = $values['documentId'];
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
