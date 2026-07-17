<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankTransactionsMatchRequestDocumentType;

class PostV1BankTransactionsMatchRequest extends JsonSerializableType
{
    /**
     * @var string $transactionId
     */
    #[JsonProperty('transactionId')]
    public string $transactionId;

    /**
     * @var value-of<PostV1BankTransactionsMatchRequestDocumentType> $documentType
     */
    #[JsonProperty('documentType')]
    public string $documentType;

    /**
     * @var string $documentId
     */
    #[JsonProperty('documentId')]
    public string $documentId;

    /**
     * @param array{
     *   transactionId: string,
     *   documentType: value-of<PostV1BankTransactionsMatchRequestDocumentType>,
     *   documentId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->transactionId = $values['transactionId'];
        $this->documentType = $values['documentType'];
        $this->documentId = $values['documentId'];
    }
}
