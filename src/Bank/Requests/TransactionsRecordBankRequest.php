<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Bank\Types\TransactionsRecordBankRequestDocumentType;

class TransactionsRecordBankRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

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
     * @var value-of<TransactionsRecordBankRequestDocumentType> $documentType
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
     *   date: DateTime,
     *   amount: string,
     *   documentType: value-of<TransactionsRecordBankRequestDocumentType>,
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
