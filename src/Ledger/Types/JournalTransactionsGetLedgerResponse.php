<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class JournalTransactionsGetLedgerResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var value-of<JournalTransactionsGetLedgerResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var ?DateTime $postedAt
     */
    #[JsonProperty('postedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $postedAt;

    /**
     * @var array<JournalTransactionsGetLedgerResponseEntriesItem> $entries
     */
    #[JsonProperty('entries'), ArrayType([JournalTransactionsGetLedgerResponseEntriesItem::class])]
    public array $entries;

    /**
     * @param array{
     *   id: string,
     *   date: DateTime,
     *   status: value-of<JournalTransactionsGetLedgerResponseStatus>,
     *   createdAt: DateTime,
     *   entries: array<JournalTransactionsGetLedgerResponseEntriesItem>,
     *   description?: ?string,
     *   documentType?: ?string,
     *   documentId?: ?string,
     *   partnerId?: ?string,
     *   postedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->date = $values['date'];
        $this->description = $values['description'] ?? null;
        $this->documentType = $values['documentType'] ?? null;
        $this->documentId = $values['documentId'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
        $this->status = $values['status'];
        $this->createdAt = $values['createdAt'];
        $this->postedAt = $values['postedAt'] ?? null;
        $this->entries = $values['entries'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
