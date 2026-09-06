<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerJournalTransactionsCreateResponse extends JsonSerializableType
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
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var value-of<PostV1LedgerJournalTransactionsCreateResponseStatus> $status
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
     * @param array{
     *   id: string,
     *   date: string,
     *   status: value-of<PostV1LedgerJournalTransactionsCreateResponseStatus>,
     *   createdAt: string,
     *   description?: ?string,
     *   documentType?: ?string,
     *   documentId?: ?string,
     *   partnerId?: ?string,
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
        $this->partnerId = $values['partnerId'] ?? null;
        $this->status = $values['status'];
        $this->createdAt = $values['createdAt'];
        $this->postedAt = $values['postedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
