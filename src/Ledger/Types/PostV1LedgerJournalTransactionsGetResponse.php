<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1LedgerJournalTransactionsGetResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

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
     * @var value-of<PostV1LedgerJournalTransactionsGetResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $postedAt
     */
    #[JsonProperty('postedAt')]
    public ?string $postedAt;

    /**
     * @var array<PostV1LedgerJournalTransactionsGetResponseEntriesItem> $entries
     */
    #[JsonProperty('entries'), ArrayType([PostV1LedgerJournalTransactionsGetResponseEntriesItem::class])]
    public array $entries;

    /**
     * @param array{
     *   id: string,
     *   date: string,
     *   status: value-of<PostV1LedgerJournalTransactionsGetResponseStatus>,
     *   createdAt: string,
     *   entries: array<PostV1LedgerJournalTransactionsGetResponseEntriesItem>,
     *   description?: ?string,
     *   documentType?: ?string,
     *   documentId?: ?string,
     *   postedAt?: ?string,
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
