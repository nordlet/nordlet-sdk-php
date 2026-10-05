<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class GlDetailReportsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $documentType
     */
    #[JsonProperty('documentType')]
    public ?string $documentType;

    /**
     * @var ?string $documentId
     */
    #[JsonProperty('documentId')]
    public ?string $documentId;

    /**
     * @var string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public string $journalTransactionId;

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
     * @var string $balance
     */
    #[JsonProperty('balance')]
    public string $balance;

    /**
     * @param array{
     *   date: DateTime,
     *   journalTransactionId: string,
     *   debit: string,
     *   credit: string,
     *   balance: string,
     *   description?: ?string,
     *   documentType?: ?string,
     *   documentId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->description = $values['description'] ?? null;
        $this->documentType = $values['documentType'] ?? null;
        $this->documentId = $values['documentId'] ?? null;
        $this->journalTransactionId = $values['journalTransactionId'];
        $this->debit = $values['debit'];
        $this->credit = $values['credit'];
        $this->balance = $values['balance'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
