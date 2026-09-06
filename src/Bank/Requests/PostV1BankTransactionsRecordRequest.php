<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankTransactionsRecordRequestDocumentType;

class PostV1BankTransactionsRecordRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var value-of<PostV1BankTransactionsRecordRequestDocumentType> $documentType
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
     *   bankAccountId: string,
     *   date: string,
     *   amount: string,
     *   documentType: value-of<PostV1BankTransactionsRecordRequestDocumentType>,
     *   documentId: string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->date = $values['date'];
        $this->amount = $values['amount'];
        $this->description = $values['description'] ?? null;
        $this->documentType = $values['documentType'];
        $this->documentId = $values['documentId'];
    }
}
