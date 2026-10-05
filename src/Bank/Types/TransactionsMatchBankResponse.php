<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class TransactionsMatchBankResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?string $counterpartyName
     */
    #[JsonProperty('counterpartyName')]
    public ?string $counterpartyName;

    /**
     * @var ?string $counterpartyIban
     */
    #[JsonProperty('counterpartyIban')]
    public ?string $counterpartyIban;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $externalId
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @var value-of<TransactionsMatchBankResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $matchedDocumentType
     */
    #[JsonProperty('matchedDocumentType')]
    public ?string $matchedDocumentType;

    /**
     * @var ?string $matchedDocumentId
     */
    #[JsonProperty('matchedDocumentId')]
    public ?string $matchedDocumentId;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   bankAccountId: string,
     *   date: DateTime,
     *   amount: string,
     *   currency: string,
     *   status: value-of<TransactionsMatchBankResponseStatus>,
     *   createdAt: DateTime,
     *   counterpartyName?: ?string,
     *   counterpartyIban?: ?string,
     *   description?: ?string,
     *   externalId?: ?string,
     *   matchedDocumentType?: ?string,
     *   matchedDocumentId?: ?string,
     *   journalTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->bankAccountId = $values['bankAccountId'];
        $this->date = $values['date'];
        $this->amount = $values['amount'];
        $this->currency = $values['currency'];
        $this->counterpartyName = $values['counterpartyName'] ?? null;
        $this->counterpartyIban = $values['counterpartyIban'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
        $this->status = $values['status'];
        $this->matchedDocumentType = $values['matchedDocumentType'] ?? null;
        $this->matchedDocumentId = $values['matchedDocumentId'] ?? null;
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
