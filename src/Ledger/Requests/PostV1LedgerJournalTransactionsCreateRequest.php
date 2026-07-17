<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\PostV1LedgerJournalTransactionsCreateRequestEntriesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1LedgerJournalTransactionsCreateRequest extends JsonSerializableType
{
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
     * @var array<PostV1LedgerJournalTransactionsCreateRequestEntriesItem> $entries
     */
    #[JsonProperty('entries'), ArrayType([PostV1LedgerJournalTransactionsCreateRequestEntriesItem::class])]
    public array $entries;

    /**
     * @param array{
     *   date: string,
     *   entries: array<PostV1LedgerJournalTransactionsCreateRequestEntriesItem>,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->description = $values['description'] ?? null;
        $this->entries = $values['entries'];
    }
}
