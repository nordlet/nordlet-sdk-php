<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\TransactionsMatchBankRequestDocumentType;

class TransactionsMatchBankRequest extends JsonSerializableType
{
    /**
     * @var string $transactionId
     */
    #[JsonProperty('transactionId')]
    public string $transactionId;

    /**
     * @var value-of<TransactionsMatchBankRequestDocumentType> $documentType
     */
    #[JsonProperty('documentType')]
    public string $documentType;

    /**
     * @var string $documentId
     */
    #[JsonProperty('documentId')]
    public string $documentId;

    /**
     * @var ?string $invoiceAmount
     */
    #[JsonProperty('invoiceAmount')]
    public ?string $invoiceAmount;

    /**
     * @param array{
     *   transactionId: string,
     *   documentType: value-of<TransactionsMatchBankRequestDocumentType>,
     *   documentId: string,
     *   invoiceAmount?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->transactionId = $values['transactionId'];
        $this->documentType = $values['documentType'];
        $this->documentId = $values['documentId'];
        $this->invoiceAmount = $values['invoiceAmount'] ?? null;
    }
}
